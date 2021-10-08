<!DOCTYPE html>
<html lang="en">
<head>
	<title>Inicio de Sesión</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../assets/login/images/icons/iniciar-sesion.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../assets/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/login/css/main.css">
<!--===============================================================================================-->
<!--===============================================================================================-->

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../assets/login/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form id="form_login"class="login100-form validate-form" action="../admin/login_check.php" method="POST">
					<span class="login100-form-title p-b-49">
						Iniciar sesion
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Este es un campo obligatorio">
						<span class="label-input100">Usuario</span>
						<input class="input100" type="text" name="user" id="user" placeholder="Ingrese su nombre de usuario">
						<span class="focus-input100" id="cuadro_user" data-symbol="&#xf206;"></span>
						<span><i id="icon_validate" class="fa fa-check-circle oculto" aria-hidden="true"></i></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Este es un campo obligatorio">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="pass" id="pass" placeholder="Ingrese su contraseña">
						<span class="focus-input100" id="cuadro_pass" data-symbol="&#xf190;"></span>
						<span><i id="icon_validate2" class="fa fa-check-circle oculto" aria-hidden="true"></i></span>
					</div>
					<br>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn" id="entrar_btn_bg"></div>
							<button class="login100-form-btn btn_entrar" id="entrar_btn">
								Entrar
							</button>
							
					<div class="g-recaptcha" data-sitekey="6LeV1ZscAAAAAJnX1FfYboEQTBotuBi_sfefhno3"></div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	
	<script>
		const formulario = document.getElementById('form_login');
		const inputs = document.querySelectorAll('#form_login input');
		let button = document.querySelector('.btn_entrar');
		var x = 0;
		var y = 0;
		button.disabled = true;
		if(button.disabled = true){
			document.getElementById('entrar_btn_bg').classList.add('disabled');
			document.getElementById('entrar_btn').style.cursor="auto";
		}
		const expresiones = {
			user: /^[a-zA-Z0-9\_\-]{4,16}$/,
			pass: /^[a-zA-Z0-9\_\-]{4,16}$/
		}		
		const validarForm = (e) =>{
			switch (e.target.name){
				case "user":
					if(expresiones.user.test(e.target.value)){
						document.getElementById('cuadro_user').classList.remove('input_incorrecto');
						document.getElementById('cuadro_user').classList.add('input_correcto');
						document.getElementById('icon_validate').classList.remove('fa-times-circle');
						document.getElementById('icon_validate').classList.add('fa-check-circle');
						document.getElementById('icon_validate').classList.remove('oculto');
						document.getElementById('icon_validate').classList.add('visible');
						document.getElementById('icon_validate').classList.remove('incorrecto');
						document.getElementById('icon_validate').classList.add('correcto');
						x=1;
					}
					else{
						document.getElementById('cuadro_user').classList.add('input_incorrecto');
						document.getElementById('icon_validate').classList.remove('fa-check-circle');
						document.getElementById('icon_validate').classList.add('fa-times-circle');
						document.getElementById('icon_validate').classList.remove('oculto');
						document.getElementById('icon_validate').classList.add('visible');
						document.getElementById('icon_validate').classList.add('incorrecto');						
						x=0;
					}
					break;
				case "pass":
					if(expresiones.pass.test(e.target.value)){
						document.getElementById('cuadro_pass').classList.remove('input_incorrecto');
						document.getElementById('cuadro_pass').classList.add('input_correcto');
						document.getElementById('icon_validate2').classList.remove('fa-times-circle');
						document.getElementById('icon_validate2').classList.add('fa-check-circle');
						document.getElementById('icon_validate2').classList.remove('oculto');
						document.getElementById('icon_validate2').classList.add('visible');
						document.getElementById('icon_validate2').classList.remove('incorrecto');
						document.getElementById('icon_validate2').classList.add('correcto');
						y=1;
					}
					else{
						document.getElementById('cuadro_pass').classList.add('input_incorrecto');
						document.getElementById('icon_validate2').classList.remove('fa-check-circle');
						document.getElementById('icon_validate2').classList.add('fa-times-circle');
						document.getElementById('icon_validate2').classList.remove('oculto');
						document.getElementById('icon_validate2').classList.add('visible');
						document.getElementById('icon_validate2').classList.add('incorrecto');
						y=0;
					}
				break;
			}
			if((x+y)==2){
				button.disabled = false;
				document.getElementById('entrar_btn_bg').classList.remove('disabled');
				document.getElementById('entrar_btn').style.cursor="pointer";
			}
		};
		inputs.forEach((input) =>{
			input.addEventListener('keyup', validarForm);
			input.addEventListener('blur', validarForm);
		});
		formulario.addEventListener('submit', (e) =>{
			//e.preventDefault();
		});
	</script>
	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="../assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="../assets/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../assets/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../assets/login/js/main.js"></script>

</body>
</html>
	
	

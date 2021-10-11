<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	include "header.php";
	?>
</head>

<body class="body-wrapper" >


<?php
	include "vistas/navbar.php";
	if($_GET['page'] =="PedroTomas"){
		include "vistas/PedroTomas.php";
	}
	else if($_GET['page'] =="EduardoBasurto"){
		include "vistas/Eduardo.php";
	}
	else if($_GET['page'] =="EduardoMancera"){
		include "vistas/Mancera.php";
	}
	else if($_GET['page'] =="OsbeliEsleban"){
		include "vistas/Osbeli.php";
	}
	else if($_GET['page'] =="CarlosAlberto"){
		include "vistas/Carlos.php";
	}
	else if($_GET['page'] =="FranciscoHilerio"){
		include "vistas/hilerio.php";
	}
	else if($_GET['page'] =="EfrainSolares"){
		include "vistas/Efrain.php";
	}
	else if($_GET['page'] =="DamianAlejandro"){
		include "vistas/damian.php";
	}
	else{
		include "vistas/home.php";
	}	
	include "vistas/footer.php";
	include "vistas/scripts.php";
?>

	
</body>

</html>
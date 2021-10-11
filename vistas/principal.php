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
	if(isset($_GET['page']) =="PedroTomas"){
		include "vistas/PedroTomas.php";
	}
	else if(isset($_GET['page']) =="EduardoBasurto"){
		include "vistas/Eduardo.php";
	}
	else if(isset($_GET['page']) =="EduardoMancera"){
		include "vistas/Mancera.php";
	}
	else if(isset($_GET['page']) =="OsbeliEsleban"){
		include "vistas/Osbeli.php";
	}
	else if(isset($_GET['page']) =="CarlosAlberto"){
		include "vistas/Carlos.php";
	}
	else if(isset($_GET['page']) =="FranciscoHilerio"){
		include "vistas/hilerio.php";
	}
	else if(isset($_GET['page']) =="EfrainSolares"){
		include "vistas/Efrain.php";
	}
	else if(isset($_GET['page']) =="DamianAlejandro"){
		include "vistas/damian.php";
	}
	include "vistas/home.php";
	include "vistas/footer.php";
	include "vistas/scripts.php";
?>

	
</body>

</html>
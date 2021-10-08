<?php
$servername = "localhost";
$database = "PrimerColoquio";
$username = "root";
$password = "";
//conexion
$conn = mysqli_connect($servername, $username, $password, $database);
//revisar conexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_close($conn);
?>
<?php
require_once "../config/database.php";
session_start();
//obtener datos
$username = mysqli_real_escape_string($db,$_POST['user']);
$password = mysqli_real_escape_string($db,$_POST['pass']);

$sql = "SELECT * FROM users WHERE User='$username' AND Password='$password'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];
      
$count = mysqli_num_rows($result);


if($count == 1){
    echo'<script type="text/javascript">
    alert("Tarea Guardada");
    </script>';
}
else{
    echo'<script type="text/javascript">
    alert("Tarea fallo");
    </script>';
}
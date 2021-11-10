<?php require_once('../Connections/conexion.php'); ?>
<?php
$nombr = strtoupper($_POST['nombre']);
$apell = strtoupper($_POST['apelli']);
$corre = $_POST['correo'];
$clave = $_POST['contra'];
$fenac = $_POST['nacimi'];
$gener = $_POST['genero'];
mysqli_select_db($conexion,$database_conexion);
$sqa = "INSERT INTO usuarios (nombre, apellido, correo, clave, fechanac, genero)
values ('$nombr', '$apell','$corre', '$clave','$fenac','$gener')";
$ejecuta = mysqli_query($conexion, $sqa);
header("location:../login.html");
?>
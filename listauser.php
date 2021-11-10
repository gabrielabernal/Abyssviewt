<?php require_once('../Connections/conexion.php'); ?>
<?php
session_start();
if (isset($_SESSION['GRUPO'])) {
$grupo = $_SESSION['GRUPO'];
$query_Recordset1 = "SELECT * FROM usuarios WHERE grupo = '$grupo' ORDER BY nombre, apellido";
} else {
$query_Recordset1 = "SELECT * FROM usuarios ORDER BY nombre, apellido";
}
mysqli_select_db($conexion,$database_conexion);
$Recordset1 = mysqli_query($conexion, $query_Recordset1) or die(mysql_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);
?>


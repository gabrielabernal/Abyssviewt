<?php require_once('../Connections/conexion.php'); ?>
<?php
$corre = $_POST['electr'];
mysql_select_db($database_conexion, $conexion);
$query_Recordset3 = "SELECT * FROM usuarios WHERE correo = '$corre'";
$Recordset3 = mysql_query($query_Recordset3, $conexion) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);
$totalRows_Recordset3 = mysql_num_rows($Recordset3);
if ($totalRows_Recordset3 > 0)
{
$passw = $row_Recordset3['clave'];
$subje = 'recuperacion de tu contrasena en Abyss Viewt';
$cabec = 'Abyss Viewt';
$mensa = 'su clave es '.$passw;
mail($corre, $subje, $mensa, $cabec);
echo '<script language="javascript">alert("REVISE SU CORREO, AHI ESTÁ SU CLAVE");</script>';
header("location:../login.html");
}
else
{
echo '<script language="javascript">alert("CORREO NO REGISTRADO");</script>';
header("location:../login.html ");
}
?>
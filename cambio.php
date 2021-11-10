<?php require_once('../Connections/conexion.php'); ?>
<?php
$usuar = $_POST[‘correo’];
$passw = $_POST[‘contra’];
$cont1 = $_POST[‘contra1’];
$cont2 = $_POST[‘contra2’];
If ($cont1 == $cont2)
{
mysql_select_db($database_conexion, $conexion);
$query_Recordset3 = "SELECT * FROM usuarios WHERE correo = '$usuar' and clave = ‘$passw’";
$Recordset3 = mysql_query($query_Recordset3, $conexion) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);
$totalRows_Recordset3 = mysql_num_rows($Recordset3);
if ($totalRows_Recordset3 > 0)
{
$sqa = "UPDATE usuarios SET clave = '$cont1' WHERE correo = '$usuar'";
$ejecuta = mysqli_query($conexion, $sqa);
header("location:../exito.html");
}
else
{
echo '<script language="javascript">alert("ERROR EN EL CAMBIO DE CONTRASEÑA");</script>';
header("location:../menu.html ");
}
}
else
{
echo '<script language="javascript">alert("CONTRASEÑAS NO SON IGUALES");</script>';
header("location:../menu.html");
}
?>
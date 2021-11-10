<?php require_once('../Connections/conexion.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
{
 if (PHP_VERSION < 6) {
 $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
 }
 $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);
 switch ($theType) {
 case "text":
 $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
 break;
 case "long":
 case "int":
 $theValue = ($theValue != "") ? intval($theValue) : "NULL";
 break;
 case "double":
 $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
 break;
 case "date":
 $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
 break;
 case "defined":
 $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
 break;
 }
 return $theValue;
}
}
mysqli_select_db($conexion,$database_conexion);
$query_Recordset2 = "SELECT tiempo1, tiempo2, tiempo3, tiempo4, tiempo5, tiempo6, tiempo7, correo, numpre FROM tiempo";
$Recordset2 = mysqli_query($conexion, $query_Recordset2) or die(mysql_error());
$row_Recordset2 = mysqli_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysqli_num_rows($Recordset2);
?>
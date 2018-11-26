<?php
$BBDD_host="localhost";
$BBDD_BBDD="id7967928_corporativo";
$BBDD_user="id7967928_root";
$BBDD_pass="98.12.08mercado";

$con=mysqli_connect($BBDD_host,$BBDD_user,$BBDD_pass);
if(mysqli_connect_errno()){
echo "no se conecto";
}
mysqli_set_charset($con,"UTF8");
mysqli_select_db($con,$BBDD_BBDD) or die ("
echo 'no se selecciono';
");
?>

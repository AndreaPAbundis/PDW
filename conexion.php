<?php
$BBDD_host="localhost";
$BBDD_BBDD="corporativo";
$BBDD_user="root";
$BBDD_pass="root";

$con=mysqli_connect($BBDD_host,$BBDD_user,$BBDD_pass);
if(mysqli_connect_errno()){
echo "no se conecto";
}
mysqli_set_charset($con,"UTF8");
mysqli_select_db($con,$BBDD_BBDD) or die ("
echo 'no se selecciono';
");
?>

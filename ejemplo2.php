<html>
    <head>
        <title>EXAMEN PARCIAL 2</title>
    </head>
<style>
*{
padding:8px;
}
body{background-color: aliceblue;}
</style>
    <body>
            	<label>
			EXAMEN TIPO 2 IÑIGO NAVARRETE MERCADO 17310214
            	</label>
		<label>
			REDIRIGE DESPUES DE 5 SEGUNDOS
            	</label>
		<label>
			MUESTRA LAS PLACAS PARES Y LAS ULTIMAS TRES PLACAS
            	</label>
<div style="margin-top: 16px; background-color: gray; width:100%; display:flex; justify-content:space-between;">
 <div style="width:25%; border-color: black; border-width: 1px; border-style:solid;">
	placa
 </div>
 <div style="width:25%; border-color: black; border-width: 1px; border-style:solid;">
	marca
 </div>
 <div style="width:25%; border-color: black; border-width: 1px; border-style:solid;">
	color
 </div>
 <div style="width:25%; border-color: black; border-width: 1px; border-style:solid;">
	modelo
 </div>
</div>
<?php
    header("refresh:5; url=index.php");
$BBDD_host="localhost";
$BBDD_BBDD="examen";
$BBDD_user="root";
$BBDD_pass="";

$con=mysqli_connect($BBDD_host,$BBDD_user,$BBDD_pass);
if(mysqli_connect_errno()){
echo "no se conecto";
}
mysqli_set_charset($con,"UTF8");
mysqli_select_db($con,$BBDD_BBDD) or die ("
echo 'no se selecciono';
");
$consultaX="SELECT * FROM automoviles WHERE ( placa > 9 ) OR ( mod(placa,2) = 0 )";
$resultados1=mysqli_query($con,$consultaX);

while($arreglo = mysqli_fetch_array($resultados1)){?>
<div style="width:100%; display:flex; justify-content:space-between;">
 <div style="width:25%; border-color: black; border-width: 1px; border-style:solid;">
	<?php echo $arreglo['placa']?>
 </div>
 <div style="width:25%; border-color: black; border-width: 1px; border-style:solid;">
	<?php echo $arreglo['marca']?>
 </div>
 <div style="width:25%; border-color: black; border-width: 1px; border-style:solid;">
	<?php echo $arreglo['color']?>
 </div>
 <div style="width:25%; border-color: black; border-width: 1px; border-style:solid;">
	<?php echo $arreglo['modelo']?>
 </div>
</div>
<?php }
?>
    </body>
</html>

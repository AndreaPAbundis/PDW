
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
<ul>
<li>
Realiza la base de datos Examen, con las tablas correspondientes llenando coherentemente al menos 10 registros(10%)
</li>
<li>
Implementa una pagina inicial, donde despliegues el enunciado del tipo de examen que te toco, y un boton de ejecutar y la informacion inicial de la tabla(30%)
</li>
<li>
Implementa una segunda pagina donde mostraras la informacion resultante(30%)
</li>
<li>
Regresa a la primer pagina con el redireccionamiento que te toque(20%)
</li>
<li>
Guardar como Exa2_iniciales, (que debe incluir las dos paginas y la bd)(10%)
</li>
</ul>
<pre>
Tipo 2: Agencia
Crear una tabla de nombre: automoviles, con los siguientes campos:

placa, numero (2), Indice y AI.
marca, char (40).
color, char(30)
modelo, numero(3)
Desplegar mediante una tabla html los automoviles cuyo numero de placa termine en numero par, y  tambien los 3 automoviles mas antiguos de ese listado.
Redireccionamiento: header con retardo
</pre>
<a style="background-color: gray; border-color: black; border-width: 1px; border-style:solid;" href="main.php">pagina de resultados</a>
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
$consultaX="SELECT * FROM automoviles";
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


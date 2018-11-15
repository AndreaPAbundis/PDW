<?php
    include("conection.php");
    if(ISSET($_POST['settings'])){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $rfc=$_POST['rfc'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    
    $tamano = $_FILES["archivo"]['size'];
    $tipo = $_FILES["archivo"]['type'];
    $archivo = $_FILES["archivo"]['name'];
    $prefijo = substr(md5(uniqid(rand())),0,6);
    if ($archivo != "") {
        // guardamos el archivo a la carpeta files, si no existe la tienes q crear antes de subir los archivos.
        $destino =  "files/".$prefijo."_".$archivo;
        if (copy($_FILES['archivo']['tmp_name'],$destino)) {
            $status = "Archivo subido con exito: <b>".$archivo."</b><br>";
        } 
        else {
            $status = "Error al subir el archivo";
        }
      } 
      else {
        $status = "Error al subir archivo";}
echo $status;
$dir="files";
$dh=opendir($dir);
echo "<br>";
echo "<table width='50' border='1'>";
echo "<tr><td colspan='2' align='center'><b>Listado de Archivos<b></td></tr>";
while (($file = readdir($dh)) !== false) {
    echo "<tr>";
      echo "<td><a href=$dir/$file>$file</a></td>";
      echo "<td><img src='$dir/$file' width='38' height='31' border='3'></td>";
    echo "</tr>";
      }
echo "</table>";
closedir($dh);

    $consulta="UPDATE cliente
     set nombre = '$name',
     apellido = '',
     direccion = '$address',
     tel = '$phone',
     rfc = '$rfc',
     email = '$email',
     password = md5('$pass'),
     empresa = '',
     imagen = '$archivo'
     WHERE id_cliente = 1";
    $resultado=mysqli_query($con,$consulta);
    if (!$resultado){
        echo "<br> Ocurrio un Error en el tiempo de la operación. <br>";
        $mysqli->connect_errno;}
    //else
        //echo "<br> Operacion Correcta. <br>";
    //echo "<script>window.location='landingUser.php?opc=Registros Insertados';</script>";

    }
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>settings</title>
    <link href="./styles/main.css" rel="stylesheet">
  </head>
  <!--<div id="carga">
    <img src="images/carga.gif"/>
  </div>-->
  <body>

    <div class="ia-workspace">
    <?php include("navbarUser.php"); ?>
          <div class="landingUser-wrapper">
            CLIENTE
          </div>
          <div class="login-wrapper-settings">
            <div class="login-form-wrapper">
              <div class="form-wrapper">
                <form id="settings" action="#" method="POST" enctype="multipart/form-data">
                  <label>SETTINGS</label>
                  <hr>
                  <input type="text" name="name" placeholder="Name"/>
                  <input type="text" name="address" placeholder="Address"/>
                  <input type="text" name="phone" placeholder="Phone"/>
                  <input type="text" name="rfc" placeholder="RFC"/>
                  <input type="email" name="email" placeholder="Email"/>
                  <input type="password" name="password" placeholder="Password"/>
                  <input name="archivo" type="file" size="40"  />
                  <input type="submit" name="settings" placeholder="ENVIAR"/>
                </form>
              </div>
            </div>
          </div>
        <?php include("footer.php"); ?>
      </div>
</body>
</html>

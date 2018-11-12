<?php
    include("conection.php");
    if(ISSET($_POST['settings'])){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $rfc=$_POST['rfc'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $consulta="UPDATE cliente
     set nombre = '$name',
     apellido = '',
     direccion = '$address',
     tel = '$phone',
     rfc = '$rfc',
     email = '$email',
     password = md5('$pass'),
     empresa = ''
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
                <form id="settings" action="#" method="POST">
                  <label>SETTINGS</label>
                  <hr>
                  <input type="text" name="name" placeholder="Name"/>
                  <input type="text" name="address" placeholder="Address"/>
                  <input type="text" name="phone" placeholder="Phone"/>
                  <input type="text" name="rfc" placeholder="RFC"/>
                  <input type="email" name="email" placeholder="Email"/>
                  <input type="password" name="password" placeholder="Password"/>
                  <input type="submit" name="settings" placeholder="ENVIAR"/>
                </form>
              </div>
            </div>
          </div>
        <?php include("footer.php"); ?>
      </div>
</body>
</html>

<?php
    include("conection.php");
    if(ISSET($_POST['signup'])){
    $name=$_POST['name'];
    $address=$_POST['address'];    
    $phone=$_POST['phone'];
    $rfc=$_POST['rfc'];
    $email=$_POST['email'];
    $pass=$_POST['password'];    
    $consulta="insert into clientes (id_cliente, nombre, direccion, tel, rfc, email, password )
     values ('', '$name', '$address', '$phone', '$rfc', '$email', md5('$pass'))";
    
            
    $resultado=$mysqli->query($consulta);
    if (!$resultado){
        echo "<br> Ocurrio un Error en el tiempo de la operación. <br>";
        $mysqli->connect_errno;}
    else
        echo "<br> Operacion Correcta. <br>";
            
           
    $mysqli->close();
    
    echo "<script>window.location='operacion_insert.php?opc=Registros Insertados';</script>";
    
    }
    ?>        
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>signup</title>
    <link href="./styles/main.css" rel="stylesheet">
  </head>
  <!--<div id="carga">
    <img src="images/carga.gif"/>
  </div>-->
  <body onload="setTimeout(cargar, 1200);">

    <div class="ia-workspace">
        <?php include("navbar.php"); ?>
          <div class="login-wrapper">
            <div class="login-form-wrapper">
              <div class="form-wrapper">
                <form id="signup" action="#" method="POST">
                  <label>SIGN UP</label>
                  <hr>
                  <input type="text" name="name" placeholder="Name"/>
                  <input type="text" name="address" placeholder="Address"/>
                  <input type="text" name="phone" placeholder="Phone"/>
                  <input type="text" name="rfc" placeholder="RFC"/>
                  <input type="email" name="email" placeholder="Email"/>
                  <input type="password" name="password" placeholder="Password"/>
                  <input type="submit" name="signup" placeholder="ENVIAR"/>
                </form>
              </div>
            </div>
          </div>
        <?php include("footer.php"); ?>
      </div>
</body>
</html>
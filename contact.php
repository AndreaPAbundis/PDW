<?php
    include("conection.php");
    if(ISSET($_POST['signup'])){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $rfc=$_POST['rfc'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $consulta="INSERT into cliente (id_cliente, nombre, direccion, tel, rfc, email, password )
     values ('', '$name', '$address', '$phone', '$rfc', '$email', md5('$pass'))";
    $resultado=mysqli_query($con,$consulta);
    if (!$resultado){
        echo "<br> Ocurrio un Error en el tiempo de la operación. <br>";
        $mysqli->connect_errno;}
    else
        echo "<br> Operacion Correcta. <br>";
    echo "<script>window.location='landingUser.php?opc=Registros Insertados';</script>";

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
          <div class="contact-wrapper">
            <div class="contact-form-wrapper">
              <div class="map-wrapper">
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14928.712824323859!2d-103.3892421!3d20.7029869!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc4fdd3929a2ecbd1!2sCETI+Plantel+Colomos!5e0!3m2!1ses-419!2sau!4v1542492000326" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="form-wrapper">
                <form id="signup" action="#" method="POST">
                  <label>CONTACTO</label>
                  <hr>
                  <input type="text" name="name" placeholder="Name"/>
                  <input type="text" name="address" placeholder="Last Name"/>
                  <input type="text" name="phone" placeholder="Phone"/>
                  <input type="email" name="email" placeholder="Email"/>
                  <textarea name="message" placeholder="Mensaje" rows="4"></textarea>
                  <input type="submit" name="signup" placeholder="ENVIAR"/>
                </form>
              </div>
            </div>
          </div>
        <?php include("footer.php"); ?>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
      <script src="scripts/ripple.js"></script>
      <script src="scripts/header.js"></script>
      <script src="scripts/mobilMenu.js"></script>
      <script src="swiper/dist/js/swiper.min.js"></script>
</body>
</html>

<?php
    include("conection.php");
    $message=null;
    if(ISSET($_POST['signup'])){
      $name=$_POST['name'];
      $address=$_POST['address'];
      $phone=$_POST['phone'];
      $rfc=$_POST['rfc'];
      $email=$_POST['email'];
      $pass=$_POST['password'];
      if( $name != null && $name != '' && $address != null && $address != '' && $phone != null && $phone != '' && $email != null && $email != '' && $pass != null && $pass != '' ){
        $registro ="SELECT email FROM cliente WHERE email = '$email'";
        $resultados=mysqli_query($con,$registro);
        if(0 == mysqli_num_rows($resultados)){
          $consulta="INSERT into cliente (id_cliente, nombre, direccion, tel, rfc, email, password )
           values ('', '$name', '$address', '$phone', '$rfc', '$email', '$pass')";
          $resultado=mysqli_query($con,$consulta);
          if (!$resultado){
            $message = "No se pudo registrar";
          }
          else
            $message = "Ahora debes iniciar sesion";
        }
        else{
          $message = "Este usuario ya esta registrado";
        }
      }
      else{
        $message = "Debe llenar los campos";
      }
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
  <body>

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
                  <?php
                  if($message != null){
                    echo '<label>' . $message . '</label>';
                  }
                  ?>
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
</body>
</html>

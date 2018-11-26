<?php
session_start();
include("conection.php");
  if(!isset($_SESSION['inicio_sesion'])){
header("location: login.php");	
}
    include("conection.php");
    $message=null;
    if(ISSET($_POST['signup'])){
      $name=$_POST['name'];
      $lastname=$_POST['lastname'];
      $puesto=$_POST['puesto'];
      $rfc=$_POST['rfc'];
      $email=$_POST['email'];
      $pass=$_POST['password'];
      if( $name != null && $name != '' && $lastname != null && $lastname != '' && $rfc != null && $rfc != '' && $email != null && $email != '' && $pass != null && $pass != '' ){
        $registro ="SELECT email FROM empleados WHERE email = '$email'";
        $resultados=mysqli_query($con,$registro);
        if(0 == mysqli_num_rows($resultados)){
          $consulta="INSERT into empleados (nomina, nombre, apellido, email, password, puesto, rfc, imagen )
           values ('', '$name', '$lastname', '$email', '$pass', '$puesto', '$rfc', '')";
          $resultado=mysqli_query($con,$consulta);
          if (!$resultado){
            $message = "No se pudo registrar";
          }
          else
            $message = "Se registro correctamente";
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
        <?php include("navbarAdmin.php"); ?>
          <div class="login-wrapper">
            <div class="login-form-wrapper">
              <div class="form-wrapper">
                <form id="signup" action="#" method="POST">
                  <label>SIGN UP</label>
                  <hr>
                  <input type="text" name="name" placeholder="Name"/>
                  <input type="text" name="lastname" placeholder="Last name"/>
                  <input type="text" name="puesto" placeholder="Puesto"/>
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

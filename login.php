<?php
session_start();
include("conection.php");
$error = "";
if(ISSET($_POST['login'])){
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $loginAdmin="SELECT * FROM empleados WHERE (email = '$email' AND password = '$pass')";
  $resultadoAdmin=mysqli_query($con,$loginAdmin);
  $row = mysqli_fetch_array($resultadoAdmin);
  $tipo_u = $row['nomina'];
	$countAdmin=mysqli_num_rows($resultadoAdmin);
  if(!empty($countAdmin)){
    $_SESSION['inicio_sesion']='ceti';
    $_SESSION['tipo_usuario'] = "admin";
    $_SESSION['tipo_usuarioB'] = "admin";
    $_SESSION['NOMBRE']=$tipo_u;
    header("refresh:1; url=landingAdmin.php");
	echo "<script>
        localStorage.setItem('type', 0);
        </script>";
  } else {
    $loginUser="SELECT * FROM cliente WHERE (email = '$email' AND password = '$pass')";
    $resultadoUser=mysqli_query($con,$loginUser);
    $row = mysqli_fetch_array($resultadoUser);
    $tipo_u = $row['id_cliente'];
  	$countUser=mysqli_num_rows($resultadoUser);
    if(!empty($countUser)){
      $_SESSION['inicio_sesion']='ceti';
      $_SESSION['tipo_usuario'] = "usuario";
      $_SESSION['tipo_usuarioB'] = "usuario";
      $_SESSION['NOMBRE']=$tipo_u;
    header("refresh:1; url=landingUser.php");
      echo "<script>
        localStorage.setItem('type', 2);
        </script>";
    }
    else{
      $error = "Este usuario no esta registrado";
    }
  }
}
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>login</title>
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
                <form id="login" action="#" method="POST">
                  <label>LOG IN</label>
                  <hr>
                  <input type="text" name="email" placeholder="Email"/>
                  <input type="password" name="password" placeholder="Password"/>
                  <input type="submit" name="login" placeholder="ENVIAR"/>
                  <?php
                  if($error != null){
                    echo '<label>' . $error . '</label>';
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

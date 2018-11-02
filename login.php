<?php
include("conexion.php");
if(ISSET($_POST['login'])){
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $loginAdmin="SELECT * FROM empleados WHERE (email = '$email' AND password = '$pass')";
  $resultadoAdmin=mysqli_query($con,$loginAdmin);
	$countAdmin=mysqli_num_rows($resultadoAdmin);
  if(!empty($countAdmin)){
    header("refresh:1; url=landingAdmin.php");
  } else {
    $loginUser="SELECT * FROM cliente WHERE (email = '$email' AND password = '$pass')";
    $resultadoUser=mysqli_query($con,$loginUser);
  	$countUser=mysqli_num_rows($resultadoUser);
    if(!empty($countUser)){
      header("refresh:1; url=landingUser.php");
    } else {
      echo "este usuario no esta registrado";
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
                </form>
              </div>
            </div>
          </div>
        <?php include("footer.php"); ?>
      </div>
</body>
</html>

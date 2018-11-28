<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MENSAJES</title>
    <link href="./styles/main.css" rel="stylesheet">
  </head>
  <!--<div id="carga">
    <img src="images/carga.gif"/>
  </div>-->
  <body>

    <div class="ia-workspace">
        <?php include("navbarAdmin.php"); ?>
          <div class="login-wrapper-settings">
            <div class="login-form-wrapper">
              <div class="form-wrapper">
                <form id="settings" action="#" method="POST">
                  <label>MENSAJES</label>
                  <input type="text" name="name" placeholder="Name"/>
                  <input type="submit" name="settings" placeholder="MENSAJES"/>
                </form>
              </div>
            </div>
            <?php
                include("conection.php");
                echo "<script> 
                var x = JSON.parse(localStorage.getItem('type'));
                console.log(x);
                if( x == 2) {
                  location.href ='login.php';
                }
        </script>";	
                if(ISSET($_POST['settings'])){
                $name=$_POST['name'];
                $consultaX="SELECT * FROM contacto WHERE nombre = '$name' OR apellido = '$name' OR email = '$name'";
                $resultados1=mysqli_query($con,$consultaX);
                if(0<mysqli_num_rows($resultados1)){
                ?>
                  <div style="margin-top: 16px; background-color: gray; width:100%; display:flex; justify-content:space-between;">
                   <div style="padding:8px; width:25%; border-color: black; border-width: 1px; border-style:solid;text-transform:uppercase;">
                  	nombre
                   </div>
                   <div style="padding:8px; width:25%; border-color: black; border-width: 1px; border-style:solid;text-transform:uppercase;">
                  	apellido
                   </div>
                   <div style="padding:8px; width:25%; border-color: black; border-width: 1px; border-style:solid;text-transform:uppercase;">
                  	mensaje
                   </div>
                   <div style="padding:8px; width:25%; border-color: black; border-width: 1px; border-style:solid;text-transform:uppercase;">
                  	email
                   </div>
                  </div>
                <?php
                }
                else{
                ?>
                <div style="margin-top: 16px; width:100%; display:flex; justify-content:center;;">
                 <div style="padding:8px; width:50%; text-align:center;">
                  No hay mensajes
                 </div>
                </div>
                <?php
                }
                ?>

                <?php while($arreglo = mysqli_fetch_array($resultados1)){?>
                <div style="width:100%; display:flex; justify-content:space-between;">
                 <div style="padding:8px; width:25%; border-color: black; border-width: 1px; border-style:solid;">
                  <?php echo $arreglo['nombre']?>
                 </div>
                 <div style="padding:8px; width:25%; border-color: black; border-width: 1px; border-style:solid;">
                  <?php echo $arreglo['apellido']?>
                 </div>
                 <div style="padding:8px; width:25%; border-color: black; border-width: 1px; border-style:solid;">
                  <?php echo $arreglo['mensaje']?>
                 </div>
                 <div style="padding:8px; width:25%; border-color: black; border-width: 1px; border-style:solid;">
                  <?php echo $arreglo['email']?>
                 </div>
                </div>
                <?php }
                }
              ?>
          </div>
        <?php include("footer.php"); ?>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
      <script src="scripts/ripple.js"></script>
      <script src="scripts/header.js"></script>
      <script src="scripts/mobilMenu.js"></script>
</body>
</html>

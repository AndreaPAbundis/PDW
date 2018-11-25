<?php
    include("conection.php");
    $message=null;
    if(ISSET($_POST['signup'])){
      $pedido=$_POST['pedido'];
      $descripcion=$_POST['descripcion'];
      $cantidad=$_POST['cantidad'];
      if( $pedido != null && $pedido != '' && $descripcion != null && $descripcion != '' && $cantidad != null && $cantidad != ''){
          $consulta="INSERT into pedidos
           values ('', '', '$pedido', '$descripcion', '', '', '$cantidad', '')";
          $resultado=mysqli_query($con,$consulta);
          if (!$resultado){
            $message = "No se pudo registrar";
          }
          else
            $message = "El pedido se hizo correctamente";
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
    <title>Pedidos Usuario</title>
    <link href="./styles/main.css" rel="stylesheet">
  </head>
  <body>

    <div class="ia-workspace">
        <?php include("navbarUser.php"); ?>
          <div class="login-wrapper">
            <div class="login-form-wrapper">
              <div class="form-wrapper">
                <form id="signup" action="#" method="POST">
                  <label>PEDIDOS</label>
                  <hr>
                  <input type="text" name="pedido" placeholder="Pedido"/>
                  <textarea name="descripcion" placeholder="Descripcion">Descripcion</textarea>
                  <input type="number" name="cantidad" placeholder="Cantidad"/>
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

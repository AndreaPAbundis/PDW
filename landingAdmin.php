<?php
  $message = null;
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Ver Pedidos</title>
    <link href="./styles/main.css" rel="stylesheet">
  </head>
  <!--<div id="carga">
    <img src="images/carga.gif"/>
  </div>-->
  <body>

    <div class="ia-workspace">
        <?php include("navbarAdmin.php"); ?>
          <div class="login-wrapper-settings" style="min-height: auto!important;">
            <div class="login-form-wrapper">
              <div class="form-wrapper">
                <form id="settings" action="#" method="POST">
                  <label>Ver Pedidos</label>
                  <input type="submit" name="settings" placeholder="ENVIAR"/>
                </form>
              </div>
            </div>
            <?php
                include("conection.php");
                if(ISSET($_POST['settings'])){
                $consultaX="SELECT * FROM pedidos";
                $resultados1=mysqli_query($con,$consultaX);
                if(0<mysqli_num_rows($resultados1)){
                ?>
                  <div style="margin-top: 16px; background-color: gray; width:100%; display:flex; justify-content:space-between;">
                   <div style="padding:8px; width:20%; border-color: black; border-width: 1px; border-style:solid;">
                  	pedido
                   </div>
                   <div style="padding:8px; width:20%; border-color: black; border-width: 1px; border-style:solid;">
                  	descripcion
                   </div>
                   <div style="padding:8px; width:20%; border-color: black; border-width: 1px; border-style:solid;">
                  	cantidad
                   </div>
                   <div style="padding:8px; width:20%; border-color: black; border-width: 1px; border-style:solid;">
                  	estatus
                   </div>
                   <div style="padding:8px; width:20%; border-color: black; border-width: 1px; border-style:solid;">
                  	actualizar
                   </div>
                  </div>
                <?php
                }
                else{
                ?>
                <div style="margin-top: 16px; width:100%; display:flex; justify-content:center;;">
                 <div style="padding:8px; width:50%; text-align:center;">
                  No tiene pedidos
                 </div>
                </div>
                <?php
                }
                ?>

                <?php while($arreglo = mysqli_fetch_array($resultados1)){?>
                <form id="alter" action="#" method="POST" >
                 <div style="width:100%; display:flex; justify-content:space-between;">
                   <div style="display: none; padding:8px; width:0%; border-color: black; border-width: 1px; border-style:solid;">
                     <input type="text" name="id_pedido" value="<?php echo $arreglo['id_pedido']?>" placeholder="<?php echo $arreglo['id_pedido']?>"/>
                   </div>
                   <div style="padding:8px; width:20%; border-color: black; border-width: 1px; border-style:solid;">
                     <input type="text" name="pedido" value="<?php echo $arreglo['pedido']?>" placeholder="<?php echo $arreglo['pedido']?>"/>
                   </div>
                   <div style="padding:8px; width:20%; border-color: black; border-width: 1px; border-style:solid;">
                     <input type="text" name="descripcion" value="<?php echo $arreglo['descripcion']?>" placeholder="<?php echo $arreglo['descripcion']?>"/>
                   </div>
                   <div style="padding:8px; width:20%; border-color: black; border-width: 1px; border-style:solid;">
                     <input type="text" name="cantidad" value="<?php echo $arreglo['cantidad']?>" placeholder="<?php echo $arreglo['cantidad']?>"/>
                   </div>
                   <div style="padding:8px; width:20%; border-color: black; border-width: 1px; border-style:solid;">
                     <input type="text" name="estatus" value="<?php echo $arreglo['estatus']?>" placeholder="<?php echo $arreglo['estatus']?>"/>
                   </div>
                   <div style="padding:8px; width:20%; border-color: black; border-width: 1px; border-style:solid;">
                     <input style="text-transform: uppercase; font-weight: 700; padding: 8px; width: 100%; max-width: 250px; border: none; background-color: #222222; color: #EAEAEA; margin-top:32px; height: 40px;" type="submit" name="alter" placeholder="ENVIAR"/>
                   </div>
                 </div>
                </form>
                <?php }
                }
                if(ISSET($_POST['alter'])){
                  $pedido=$_POST['pedido'];
                  $descripcion=$_POST['descripcion'];
                  $cantidad=$_POST['cantidad'];
                  $estatus=$_POST['estatus'];
                  $id=$_POST['id_pedido'];
                  $consulta="UPDATE pedidos
                   set pedido = '$pedido',
                   descripcion = '$descripcion',
                   cantidad = '$cantidad',
                   estatus = '$estatus'
                   WHERE id_pedido = $id";
                  $resultado=mysqli_query($con,$consulta);
                  if (!$resultado){
                      $message = "No se pudo actualizar";
                    }
                    else{
                        $message = "Se actualizo el pedido";
                    }
                }
              ?>
          </div>
          <?php
            echo '<div style="width:100%; display:flex; justify-content:center; padding:64px; min-height:90vh;"><label style="color:black;font-size:32px;">' . $message . '</label></div>';
          ?>
        <?php include("footer.php"); ?>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
      <script src="scripts/ripple.js"></script>
      <script src="scripts/header.js"></script>
      <script src="scripts/mobilMenu.js"></script>
</body>
</html>

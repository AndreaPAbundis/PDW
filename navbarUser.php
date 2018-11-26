<?php
    include("conection.php");
    if(ISSET($_POST['erase'])){
    $id = $_SESSION['NOMBRE'];
    $consulta="DELETE FROM cliente WHERE id_cliente='$id'";
    $resultado=mysqli_query($con,$consulta);
    if (!$resultado){
        echo "<br> Ocurrio un Error en el tiempo de la operación. <br>";
        $mysqli->connect_errno;}
    else
        echo "<br> Operacion Correcta. <br>";
    echo "<script>window.location='Index.php';</script>";

    }
?>
<div class="header-container">
    <header class="main-nav navbar-color">
      <a href="index.php" class="link-img">
        <img src="https://dummyimage.com/1280x1280/ccc/fff"/>
      </a>
      <nav role="navigation">
        <ul>
          <a href="landingUser.php">
            <li>HACER PEDIDO</li>
          </a>
            <a href="VerPedidos.php">
              <li>VER PEDIDOS</li>
            </a>
          <a href="settings.php">
            <li>AJUSTES</li>
          </a>
          <a href="logout.php?logout">
            <li>CERRAR SESION</li>
          </a>
          <a>
            <form id="erase" action="#" method="POST">
              <input type="submit" name="erase" value="ELIMINAR CUENTA"/>
            </form>
          </a>
        </ul>
      </nav>
      <div id="nav-icon">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </header>
  </div>

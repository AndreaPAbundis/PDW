<?php
    include("conection.php");
    if(ISSET($_POST['erase'])){
    $consulta="DELETE FROM cliente WHERE NOMBRE='inigo Navarrete'";
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
    <header class="main-nav">
      <a href="">
      </a>
      <nav role="navigation">
        <ul>
          <a href="">
            <li>HACER PEDIDO</li>
          </a>
          <a href="">
            <li>AJUSTES</li>
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

<?php
include("conection.php");
?>
<div class="header-container">
    <header class="main-nav" id="nav">
      <a href="index.php" class="link-img">
        <img src="https://dummyimage.com/1280x1280/ccc/fff"/>
      </a>
      <nav role="navigation">
        <ul>
          <a href="index.php#nosotros">
            <li>NOSOTROS</li>
          </a>
          <a href="index.php#servicios">
            <li>SERVICIOS</li>
          </a>
          <a href="index.php#clientes">
            <li>CLIENTES</li>
          </a>
          <a href="contact.php">
            <li>CONTACTO</li>
          </a>
          <a href="presentacion.php">
            <li>PRESENTACION</li>
          </a>
          <?php
           // if(isset($_SESSION['inicio_sesion'])){
          ?>
          <a href="login.php">
            <button class="btn-outline">INICIAR SESION</button>
          </a>
          <a href="signup.php">
            <button class="btn-outline">REGISTRARSE</button>
          </a>
          <?php
          //}
          ?>
        </ul>
      </nav>
      <div id="nav-icon">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </header>
  </div>

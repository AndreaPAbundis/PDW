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
                  <label>SIGN UP</label>
                  <hr>
                  <input type="text" name="name" placeholder="Name"/>
                  <input type="text" name="address" placeholder="Address"/>
                  <input type="text" name="phone" placeholder="Phone"/>
                  <input type="text" name="rfc" placeholder="RFC"/>
                  <input type="email" name="email" placeholder="Email"/>
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
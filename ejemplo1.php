<html>
    <head>
        <title>actividad 2</title>
    </head>
    <body>
    <?php
    if(!ISSET($_GET['formulario'])){
    ?>
        <form id="formulario" action="#" method="GET">
            <select name="select">
                <option value="1">suma</option>
                <option value="2">volumen</option>
            </select>
            <input type="submit" name="formulario" />
        </form>
    <?php
    }
    else{
        if($_GET['select'] == 1){
            include 'Suma.php';
        }
        else if($_GET['select'] == 2){
            include 'Volumen.php';
        }
    }
    if(ISSET($_GET['Suma'])){
        include 'Suma.php';
        $num1=$_GET['num1'];
        $num2=$_GET['num2'];
        $num3=$_GET['num3'];
        $num4=$_GET['num4'];
        $num5=$_GET['num5'];
    
        Suma($num1,$num2, $num3, $num4, $num5);
    }

    if(ISSET($_GET['Volumen'])){
        include 'Volumen.php';
        $num1=$_GET['num1'];
        $num2=$_GET['num2'];
    
        echo "El volumen del cilindro es " . Volumen($num1,$num2);
    }
    ?>
    </body>
</html>
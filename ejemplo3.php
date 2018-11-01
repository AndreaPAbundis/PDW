<?php

function Suma($num1,$num2, $num3, $num4, $num5){
    $total=$num1+$num2+$num3+$num4+$num5;
    echo "El resultado de la suma es " . $total;
}

if(!ISSET($_GET['Suma'])){
?>

<form id="Suma" action="#" method="GET">
            <input type="text" name="num1" required/>
            <input type="text" name="num2" required/>
            <input type="text" name="num3" required/>
            <input type="text" name="num4" required/>
            <input type="text" name="num5" required/>
            <input type="submit" name="Suma" />
</form>

    <?php
    }
?>
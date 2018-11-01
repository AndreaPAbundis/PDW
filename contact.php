<?php

function Volumen($num1,$num2){
    return $total=3.14159*$num1*$num1*$num2;    
}

if(!ISSET($_GET['Volumen'])){
?>

<form id="Volumen" action="#" method="GET">
            <input type="text" name="num1" required/>
            <input type="text" name="num2" required/>
            <input type="submit" name="Volumen" />
</form>

    <?php
    }
?>





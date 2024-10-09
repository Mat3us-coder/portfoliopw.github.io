<form method="POST" action="">
    <input type="number" name="a" placeholder="Digite o valor de A" value="a">
    <br/>
    <input type="number" name="b" placeholder="Digite o valor de B" value="b">
    <br/>
    <input type="number" name="c" placeholder="Digite o valor de C" value="c">
    <br/>
    <input type="submit" name="enviar" value="enviar"/>
</form>


<?php
$a= 0;
$b= 0;
$c= 0;
$x= 0;
$x1= 0;
$x2= 0;
$delta= 0;

function Bhaskara($a,$b,$c){
    if(isset($_POST['enviar'])){

        $a= $_POST['a'];
        $b= $_POST['b'];
        $c= $_POST['c'];

        $delta= (($b*$b)-4*$a*$c);
    
        $x1= (-$b + sqrt($delta))/2 * $a;
        $x2= (-$b - sqrt($delta))/2 * $a;
        echo "x1 é igual a: $x1 <br/>";
        echo "x2 é igual a: $x2 <br/>";
    }
}

Bhaskara($a, $b, $c)

?>
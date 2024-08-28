<?php 
// echo '<div style="margin=0px; padding=0px; height: 100vh; display:flex; justify-content: center; align-items: center; color:darkblue">
//         <h1>Henrique Silva Stolle</h1>
//     </div>';

$raioCirculo = 10;
$pi = 3.14;
$calculoAreaCirculo = pow($raioCirculo, 2) * $pi;
echo "<h1>$calculoAreaCirculo</h1>";

if($calculoAreaCirculo > 50){
    echo "<h1>A área é MAIOR do que o valor limite, 50.</h1>";
}elseif($calculoAreaCirculo = 50){
    echo "<h1>A área é IGUAL ao valor limite, 50.</h1>";
}elseif($calculoAreaCirculo < 50){
    echo "<h1>A área é MENOR do que o valor limite de 50.</h1>";
}
?>
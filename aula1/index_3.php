<?php 
// echo '<div style="margin=0px; padding=0px; height: 100vh; display:flex; justify-content: center; align-items: center; color:darkblue">
//         <h1>Henrique Silva Stolle</h1>
//     </div>';

// Variaveis
$Fahrenheit = 100;
$Calcius = 22;

// Função para converção de Fahrenheit para Calcius
function changeFahrenheitParaCalcius($tempFahrenheit) {
    $result = ($tempFahrenheit - 32) * 5/9;
    return $result;
} 

// Função para converção de Calcius para Fahrenheit 
function changeCalciusParaFahrenheit($tempCalcius) {
    $result = ($tempCalcius * 9/5) + 32;
    return $result;
} 

echo '<h1>', changeCalciusParaFahrenheit(20), '°F</h1>';
echo '<h1>', round(changeFahrenheitParaCalcius(100), 2), '°C</h1>';

// Função para verificar se um numero é primo 
function ehPrimo($numero) {
    if ($numero < 2) {
        return false;
    }
    
    // Verifica divisores de 2 até a raiz quadrada do número
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    
    return true;
}
// numero ficticio
$numero = 29;

if (ehPrimo($numero)) {
    echo "<h1>$numero é primo</h1>";
} else {
    echo "<h1>$numero não é primo</h1>";
}

function varificaEhPar($numero){
    if($numero % 2 == 0){
        echo '<h1>O número:', $numero,  ' é Par.</h1>';
    }else{
        echo '<h1>O número:', $numero, ' é Ímpar.</h1>';
    }
    return true;
}
varificaEhPar(2);

// calculo da data de nascimento
$anoNascimento = 2006;
$calculoIdade = 2024 - $anoNascimento;
echo '<h1>Idade: ' , $calculoIdade, '</h1>';

$numeroEmMinutos = 180;
$numeroEmMinutosParaHoras = $numeroEmMinutos / 60;


// $numeroEmMinutosParaHorasMinutos = $numeroEmMinutos - ( * 60);
echo '<h1>Número Em Minutos: ' , $numeroEmMinutos, ' minutos</h1>';
echo '<h1>Número Em Horas: ' , $numeroEmMinutosParaHoras, 'horas</h1>';

// Função para converção de Calcius para Fahrenheit 
function tabuada($numero) {
    echo "<h1>Tabuada de $numero:</h1><br/>";

    for($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<h1>$numero x $i = $resultado</h1><br/>";
    }
} 
tabuada(9);

// fatorial
function fatorial($numero){
    $total = 1;
    for($i = 1; $i <= $numero; $i++){
        $total *= $i; 
    }
    echo '<h1>Fatorial de ', $numero, ' = ', $total, '</h1>';
    return true;
}
fatorial(9);
?>
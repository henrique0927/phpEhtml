<?php 
/* 
      INDEX DESENVOLVIDO COM O PROFESSOR ÍCARO
  -- Fracamente Tipado

        BASICOS
  $variavel = "valor"

  // código de exemplo
  <?php
    // executa o código PHP somente quando acontecer a requesição
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // isset --> verifica se a variável recebida no POST não está vazia.
            if(isset($_POST['verificar_primo'])){
                $numero = $_POST['numero_primo'];
                $ehPrimo = true; // CamelCase pois difere das boas práticas do HTML/CSS/JS, visto que PHP usa CamelCase como boa prática

                if($numero <= 1){
                    $ehPrimo = false;
                }else{
                    for($i = 2; $i <= sqrt($numero); $i++){
                        if($numero % $i == 0){
                            $ehPrimo = false;
                            break;
                        }
                    }
                }
            }
            echo '<h1>O número ', $numero, ' é ', ($ehPrimo ? 'primo</h1>' : 'não é primo</h1>'); // resposta rápida
        }
    ?>
*/
$mensagem = "Olá mundo";
$primeroNome = "Henrique";
$idade = 17;
$masculino = true;
$feminino = false;

$resultado = $idade + 18 * 7;
echo $resultado;
echo "<br/>";

$num = 9.987;
$num2 = 27;
echo '<h2>Ponto Flutuante: ', $num, '<h2/><br/>';
echo '<h2>Inteiro:', $num2, '<h2/><br/>';

$nota = 10;
if ($nota >= 7){
  echo'<p>Parabéns, você foi aprovado. NOTA:', $nota , '</p>' ;
}else{
  echo'<p>Infelizmente você não foi aprovado. NOTA:', $nota , '</p>' ;
}
?>
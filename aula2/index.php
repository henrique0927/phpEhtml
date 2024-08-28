<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML e PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="POST">
        <label for="numero_primo">Verifica se é Número Primo:</label>
        <input type="number" name="numero_primo" id="numero_primo" required>
        <button type="submit" name="verificar_primo">Verificar</button>
    </form>

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
</body>
</html>
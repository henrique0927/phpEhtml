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
        <div class="input-group">
            <label class="label">Altura:</label>
            <input autocomplete="off" name="altura" id="Email" class="input" type="number" required focus>
            <label class="label">Base:</label>
            <input autocomplete="off" name="base" id="Email" class="input" type="number" required>
            <div id="button">
                <button type="submit" name="verificar_envio">Verificar</button>
            </div> 
            <?php
            //verificar o método enviado
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    // Verificar se não foi enviado algo vazio, (isset)
                    if(isset($_POST["verificar_envio"])){
                        // calcular a área do triângulo -->> bh/2
                        $altura = $_POST["altura"];
                        $base = $_POST["base"];
                        $area = ($base * $altura) / 2;
                        // Verifique se a área calculada é maior do que um valor limite 100.
                        if($area > 100){
                            // Exiba uma mensagem informando se a área é maior ou menor/igual ao valor limite.
                            echo "<p>Área maior que o limite de 100.</p>";
                        }else{
                            // Exiba uma mensagem informando se a área é maior ou menor/igual ao valor limite.
                            echo "<p>Área: ", $area,"</p>";
                        }
                    }
                }
            ?>
        </div>
    </form>
</body>
</html>
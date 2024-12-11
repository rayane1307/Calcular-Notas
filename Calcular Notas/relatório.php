<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
 <body>
 

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Captura as notas do formulário
        $nota1 = filter_input(INPUT_POST, 'nota1', FILTER_VALIDATE_FLOAT);
        $nota2 = filter_input(INPUT_POST, 'nota2', FILTER_VALIDATE_FLOAT);
        $nota3 = filter_input(INPUT_POST, 'nota3', FILTER_VALIDATE_FLOAT);
        $nota4 = filter_input(INPUT_POST, 'nota4', FILTER_VALIDATE_FLOAT);

      

        // Verifica se todas as notas são válidas
        if ($nota1 !== false && $nota2 !== false && $nota3 !== false && $nota4 !== false) {
            // Calcula a média
            $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

            // Exibe o resultado
            echo "<div class='resultado'>";
            echo "<h2>Média das Notas: " . number_format($media, 2) . "</h2>";
            
            // Exibe o resultado final do aluno
            if ($media >= 7) {
                echo "<p><strong>Resultado:</strong> Aprovado</p>";
            } elseif ($media >= 5) {
                echo "<p><strong>Resultado:</strong> Recuperação</p>";
            } else {
                echo "<p><strong>Resultado:</strong> Reprovado</p>";
            }
            echo "</div>";
        } else {
            echo "<div class='resultado' style='background-color: #f8d7da; color: #721c24;'>";
            echo "<h2>Erro: As notas informadas não são válidas. Tente novamente.</h2>";
            echo "</div>";
        }
    }
    ?>

</div>





 </body>
</html>
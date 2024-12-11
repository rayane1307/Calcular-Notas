<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Notas</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
  
   <div class="container">
    <h1>Relatório de Notas</h1>

    <!-- Formulário de entrada de notas -->
    <div class="form-container">
        <form method="POST" action="relatório.php">
            <label for="nota1">Nota 1:</label>
            <input type="number" step="0.01" id="nota1" name="nota1" required>

            <label for="nota2">Nota 2:</label>
            <input type="number" step="0.01" id="nota2" name="nota2" required>

            <label for="nota3">Nota 3:</label>
            <input type="number" step="0.01" id="nota3" name="nota3" required>

            <label for="nota4">Nota 4:</label>
            <input type="number" step="0.01" id="nota4" name="nota4" required>

            <button type="submit">Calcular Média</button>
        </form>
    </div>
</body>

</html>
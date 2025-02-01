<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro</h1>
    <?php
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome']; 
        echo "Bem-vindo $sobrenome, $nome!";
    ?>
</body>
</html>
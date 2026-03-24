
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>

    <form action="" method="POST">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>
        
        <label>E-mail:</label><br>
        <input type="email" name="email" required><br><br>

        <button type="submit">Enviar Dados</button>
    </form>

</body>
</html>


<?php

$pdo = new PDO("mysql:host=localhost;dbname=cadastro", "root", "");


if ($_POST) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    
    $sql = "INSERT INTO cadastro (nome, email) VALUES (:nome, :email)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nome' => $nome, 'email' => $email]);

    echo " Salvo no banco com sucesso!<br><br>";
}



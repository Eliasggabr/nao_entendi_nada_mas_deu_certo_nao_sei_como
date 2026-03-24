
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

//pra ligar o php com o banco de dados é so colocar o nome do banco no dbname, o usuario(root) e a senha(vazia) no PDO, e depois usar o prepare e execute pra inserir os dados no banco. E colocar o nome da tabela(que aqui é cadastro) depois de INSERT INTO, pq o coitado do php n tnha conseguido achar a tabela pq tava com o nome errado. Brutal. sobra nada pro beta. no html, criar um formulario com os campos q eu quero inserir no banco, e usar o method POST pra enviar os dados pro php. E no php, usar o $_POST pra pegar os dados do formulario e inserir no banco.

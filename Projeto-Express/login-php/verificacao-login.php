<?php
    
    include 'conexao-php/connection.php';

    $conn = getConnection();

    $email =  $_REQUEST['email'];
    $senha = $_REQUEST['senha'];

    $sql = "SELECT * FROM usuario WHERE email = :email and senha = :senha" ;

    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":email", $email);
    $stmt->bindValue(":senha", $senha);
    $stmt->execute();

    $result = $stmt->fetchAll();

    foreach($result as $valeu){
        echo 'Nome: ' .$valeu['nome'].'<br/>';
        echo 'Telefone: ' .$valeu['telefone'].'<br/>';
        echo 'E-mail: ' .$valeu['email'].'<br/>';
        echo 'Senha: ' .$valeu['senha'].'<br/>';
    }
?>
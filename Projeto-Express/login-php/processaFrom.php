<?php

	include 'conexao-php/connection.php';

    $conn = getConnection();
    
    $sql = "INSERT INTO usuario (nome, telefone, email, senha) VALUES (:nome,:telefone,:email,:senha)";

    $nome = $_REQUEST['nome'];
    $telefone = $_REQUEST['telefone'];
	$email =  $_REQUEST['email'];
	$senha =  $_REQUEST['senha'];

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);

    if($stmt->execute()){
        echo 'Salvo com sucesso!';
    }else{
        echo 'Erro ao salvar!';
    }

?>
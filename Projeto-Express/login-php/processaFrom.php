<?php

	include 'conexao-php/connection.php';

    $conn = getConnection();
    
    $sql = "INSERT INTO usuario (nome, email, telefone,password) VALUES (:nome,:email,:telefone,:senha)";

    $nome = $_REQUEST['nome'];
	$email =  $_REQUEST['email'];
	$telefone = $_REQUEST['telefone'];
	$senha =  $_REQUEST['senha'];

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':senha', $senha);

    if($stmt->execute()){
        echo 'Salvo com sucesso!';
    }else{
        echo 'Erro ao salvar!';
    }

?>
<?php

	include 'conexao-php/connection.php';

    $conn = getConnection();
    
    $nome = $_REQUEST['nome'];
    $telefone = $_REQUEST['telefone'];
    $email =  $_REQUEST['email'];
    $senha =  $_REQUEST['senha'];
    
    //Prepara o cadastro

    $sql = "INSERT INTO usuario (nome, telefone, email, senha) VALUES (:nome,:telefone,:email,:senha)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    //Validar o cadastro
    $validar = $conn->prepare("SELECT * FROM usuario WHERE email = ?");
    $validar->execute(array($email));
    if($validar->rowCount() == 0){
    //Executa o cadastro
        if($stmt->execute()){
            header("location: ../TopicosSpecial.php");
        }else{
            echo 'Erro ao salvar!';
        }
   }else{
        header("location: ../cadastramento.php");
    }
?>
<?php

session_start();
include('conexao.php');


    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $valor = $_POST["valor"];
    $descricao = $_POST["descricao"];


  
    $sql = "INSERT INTO produto (id,nome, valor, descricao) VALUES ('$id','$nome', '$valor', '$descricao')";

    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso";
    } else {
        echo "Erro ao inserir dados: " . $conn->error;
    }

    $conn->close();

?>
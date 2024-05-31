<?php

include ("conexao.php");

if (isset($_POST["nome"], $_POST["email"]) ){
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    try{
        $sql = "INSERT INTO interesados (nome, email) VALUES ('$nome', '$email')";
        $resultado = $conexao->query($sql);
        if ( $resultado){
            header("location: index.php?mensagem=1");
        }  
    } catch (Exception $e) {
        header("location: index.php?mensagem=2");
    }
}
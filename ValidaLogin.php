<?php

session_start();

include ("class/BDConecta.php");
include ("class/BDCliente.php");

$location = $_POST['location'];
$produto_id = $_POST['produto_id'];
$senha = $_POST['senha'];
$email = $_POST['email'];

$cliente = consultaClienteEmail($conexao,$email);

if($email == $cliente['email'] && $senha == $cliente['senha']){
        $_SESSION["cliente"] = $email;
        $_SESSION["tipo"] = $cliente['tipo'];
        header("location:$location?produto_id=$produto_id");
    } else {
    header("location:login.php?location=$location&produto_id=$produto_id");
}

?>
<?php 
include("cabecalho.php");
include ("./banco/BDConecta.php");
include ("./banco/BDCliente.php");

$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$telefone = $_POST["telefone"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$id_cidade = $_POST["id_cidade"];






if ( inserirCliente($conexao, $nome, $endereco, $telefone, $cpf, $email, $id_cidade) ) {
    ?>


    <br><br><br><br><br><br><br>
    <p class="text-success">Cadastro realizado com sucesso.</p>
    <br><br><br><br><br><br><br>



    <?php
} else { 
    $msg = mysqli_error( $conexao );
    ?>

    <br><br><br><br><br><br><br>
    <p class="text-danger">Cadastro não foi realizado:

        <?php

        if ($msg == "Duplicate entry '0' for key 'idxcliente'"){
            echo " Usuário já cadastrado!";
        } else {
            echo $msg;
        }


        ?></p>
    <br><br><br><br><br><br><br>
    <?php
}

include ("./rodape.php"); 

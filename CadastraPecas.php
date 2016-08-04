<?php 
include("cabecalho.php");
include ("./banco/BDConecta.php");
include ("./banco/BDPecas.php");

$nome = $_POST["nome"];
$marca = $_POST["marca"];
$quantidade = $_POST["quantidade"];
$custo = $_POST["custo"];
$valor = $_POST["valor"];
$localizacao = $_POST["localizacao"];
$aplicacao = $_POST["aplicacao"];


if ( inserirPeca($conexao, $nome, $marca, $quantidade, $custo, $valor, $localizacao, $aplicacao) ) {
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
            echo " Peca já cadastrada!";
        } else {
            echo $msg;
        }


        ?></p>
    <br><br><br><br><br><br><br>
    <?php
}

include ("./rodape.php"); 

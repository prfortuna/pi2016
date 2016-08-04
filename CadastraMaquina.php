<?php 
include("cabecalho.php");
include ("./banco/BDConecta.php");
include ("./banco/BDMaquina.php");

$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$ano = $_POST["ano"];
$cor = $_POST["cor"];
$serie = $_POST["serie"];
$nmotor = $_POST["nmotor"];
$custo = $_POST["custo"];
$valor = $_POST["valor"];
$status = $_POST["status"];
$id_cliente = $_POST["id_cliente"];


if ( inserirMaquina($conexao, $marca, $modelo, $ano, $cor, $serie, $nmotor, $custo, $valor, $status, $id_cliente) ) {
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
            echo " Máquina já cadastrada!";
        } else {
            echo $msg;
        }


        ?></p>
    <br><br><br><br><br><br><br>
    <?php
}

include ("./rodape.php"); 

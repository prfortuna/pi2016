<?php 
include("index.php");
include("./banco/BDConecta.php");
include("./banco/BDCidade.php");

$nome = $_POST["nome"];
$uf = $_POST["uf"];


if ( inserirCidade($conexao, $nome, $uf) ) {
    ?>
    <p class="text-success">Cidade <?= $nome ?> - <?= $uf ?>, cadastrada com sucesso.</p>
    <?php 
} else { 
    $msg = mysqli_error( $conexao );
    ?>
    <p class="text-danger">Cidade <?= $nome ?> não foi adicionada: <?= $msg ?></p>
    <?php
}
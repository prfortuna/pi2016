<?php 
include("index.php");
include ("./banco/BDConecta.php");
include ("./banco/BDCliente.php");

$id = $_POST["id"];
$endereco = $_POST["endereco"];
$cidade_id = $_POST["cidade_id"];
$telefone = $_POST["telefone"];
$rg = $_POST["rg"];
$cpf = $_POST["cpf"];
$cep = $_POST["cep"];
$email = $_POST["email"];
$nome = $_POST["nome"];


if ( alterarCliente($conexao, $id, $nome, $endereco, $cidade_id, $cep,  $telefone, $rg, $cpf, $email) ) {
    ?>
    <p class="text-success">Dados alterados com sucesso.</p>
    <?php 
} else { 
    $msg = mysqli_error( $conexao );
    ?>
    <p class="text-danger">Erro ao realizar alteração de cadastro: <?= $msg ?></p>
    <?php
}

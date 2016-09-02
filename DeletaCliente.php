<?php 
include("index.php");
include("./banco/BDConecta.php");
include("./banco/BDCliente.php");

$id = $_POST["id"];

if (removerCliente( $conexao, $id ) ) {
    header("Location: ListaCliente.php?deleted=true"); 
    die();
} else { 
    $msg = mysqli_error( $conexao );
    ?>
    <p class="">O cliente não pode ser excluído: <?= $msg ?></p>
    <?php
}
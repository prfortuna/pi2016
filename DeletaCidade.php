<?php 
include("index.php");
include("./banco/BDConecta.php");
include("./banco/BDCidade.php");

$id = $_POST["id"];

if (removerCidade( $conexao, $id ) ) {
    header("Location: ListaCidade.php?deleted=true"); 
    die();
} else { 
    $msg = mysqli_error( $conexao );
    ?>
    <p class="">A cidade não pode ser excluída: <?= $msg ?></p>
    <?php
}
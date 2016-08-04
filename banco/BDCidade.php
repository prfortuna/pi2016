<?php

// INSERIR:
function inserirCidade( $conexao, $nome, $uf, $cep ) {
    $query = "insert into cidades (nome, uf, cep) values ('{$nome}','{$uf}','{$cep}')";
    return mysqli_query($conexao, $query);
}

// EXCLUIR
function removerCidade( $conexao, $id ) {
    $query = "delete from cidades where ID = {$id}";
    return mysqli_query($conexao, $query);
}

// CONSULTA CIDADE PELO ID
function consultaCidade( $conexao, $id ) {
    $query = "select * from cidades where ID = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysql_fetch_assoc($resultado);
}

// LISTA TODAS AS CIDADES
function listaCidades($conexao) {
    $lista = array();
    $resultado = mysqli_query($conexao, "select * from cidades order by nome asc");
    while ($cidade = mysqli_fetch_assoc($resultado)) {
        array_push($lista, $cidade);
    }
    return $lista;
}

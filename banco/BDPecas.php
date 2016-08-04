<?php

// INSERIR
function inserirPeca( $conexao, $nome, $marca, $quantidade, $custo, $valor, $localizacao, $aplicacao) {
    $query = "insert into pecas (nome, marca, quantidade, custo, valor, localizacao, aplicacao) " .
            "values ('{$nome}', '{$marca}', '{$quantidade}', '{$custo}','{$valor}', '{$localizacao}', '{$aplicacao}')";
    return mysqli_query($conexao, $query);
}

/* ALTERAR
function alterarCliente( $conexao, $id, $nome, $endereco, $cidade_id, $cep, $telefone, $rg, $cpf, $email) {
    $query = "update clientes set nome = '{$nome}', endereco = '{$endereco}', cidade_id = '{$cidade_id}', cep = '{$cep}'," .
             "telefone = '{$telefone}', rg = '{$rg}', cpf = '{$cpf}', email = '{$email}' " . 
             "where id = '{$id}'";
    return mysqli_query($conexao, $query);
}

// ALTERAR SENHA CLIENTE
function alterarSenhaCliente( $conexao, $id, $senha ) {
    $query = "update clientes set senha = '{$senha}' where id = '{$id}'";
    return mysqli_query($conexao, $query);
}

// ALTERAR TIPO CLIENTE
function alterarTipoCliente( $conexao, $id, $tipo ) {
    $query = "update clientes set tipo = '{$tipo}' where id = '{$id}'";
    return mysqli_query($conexao, $query);
}

// EXCLUIR
function removerCliente( $conexao, $id ) {
    $query = "delete from clientes where id = {$id}";
    return mysqli_query($conexao, $query);
}

// BUSCA CLIENTE PELO EMAIL
function consultaClienteEmail( $conexao, $email ) {
    $query = "select * from clientes where email = '{$email}'";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

// BUSCA CLIENTE PELO ID
function consultaClienteId( $conexao, $id ) {
    $query = "select * from clientes where id = '{$id}'";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

*/
// LISTAR TODOS OS CLIENTES
function listaPecas($conexao) {
    $lista = array();
    $sql = "select * from pecas";
    $resultado = mysqli_query($conexao, $sql);

    while ($peca = mysqli_fetch_assoc($resultado)) {
        array_push($lista, $peca);
    }

    return $lista;
}
/*
// LISTAR CONSULTANDO PELO NONE
function listaClientesNome($conexao, $expressao) {
    $lista = array();
    $resultado = mysqli_query($conexao, 
                "select clientes.*, cd.nome as cidade " .
                "from clientes " .
                "inner join cidades cd on cd.id = clientes.cidade_id" .
                "where clientes.nome like '%{$expressao}%'"
                );

    while ($cliente = mysqli_fetch_assoc($resultado)) {
        array_push($lista, $cliente);
    }

    return $lista;
}
*/
?>

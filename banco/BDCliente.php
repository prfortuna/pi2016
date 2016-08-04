<?php

// INSERIR
function inserirCliente( $conexao, $nome, $endereco, $telefone, $cpf, $email, $id_cidade) {
    $query = "insert into clientes (nome, endereco, telefone, cpf, email, id_cidade) " .
            "values ('{$nome}', '{$endereco}', '{$telefone}', '{$cpf}','{$email}', '{$id_cidade}')";
    return mysqli_query($conexao, $query);
}

// ALTERAR
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


// LISTAR TODOS OS CLIENTES
function listaClientes($conexao) {
    $lista = array();
    $sql = "select clientes.*, cd.nome as cidade from clientes \n"
        . "inner join cidades cd on cd.id = clientes.id_cidade";
    $resultado = mysqli_query($conexao, $sql);

    while ($cliente = mysqli_fetch_assoc($resultado)) {
        array_push($lista, $cliente);
    }

    return $lista;
}

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

?>

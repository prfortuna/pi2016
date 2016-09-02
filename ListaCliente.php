<?php
include ("./cabpainel.php");
include("./banco/BDConecta.php");
include("./banco/BDCliente.php");
?>
<br>
<table class="tabelaEsquerda">
    <tr>
        <td>
            <form name="inserir" action="FormCadastraCliente.php" method="POST">
                <input type="hidden" name="id" value="">
                <input class="btn btn-default" type="submit" alt="Submit" width="48" height="48" title="Inserir nova Cidade" value="Inserir novo Cliente">
            </form>
        </td>
        <td>
    </tr>
</table>
<h1>Lista de Clientes Cadastrados </h1>

<table class="table table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>TELEFONE</th>
        <th>CIDADE</th>
        <th>CELULAR</th>
        <th>E-MAIL</th>
        <th> </th>
        <th> </th>
    </tr>
    <?php
    $clientes = listaClientes($conexao);
    foreach ($clientes as $cliente) {
        ?>    
        <tr>
            <td> <?= $cliente['id'] ?> </td>
            <td> <?= $cliente['nome'] ?> </td>
            <td> <?= $cliente['endereco'] ?> </td>
            <td> <?= $cliente['cidade'] ?> </td>
            <td> <?= $cliente['telefone'] ?> </td>
            <td> <?= $cliente['email'] ?> </td>

            <td>
                <form action="FormAlteraCliente.php" method="POST">
                    <input type="hidden" name="id" value="<?= $cliente['id'] ?>">
                    <input class="btn btn-success" type="submit" value="Ver" alt="Submit" width="24" height="24" title="Detalhar">
                </form>
            </td>
            <td>
                <form action="DeletaCliente.php" method="POST">
                    <input type="hidden" name="id" value="<?= $cliente['id'] ?>">
                    <input class="btn btn-warning" type="submit" value="Excluir" alt="Submit" width="24" height="24" title="Excluir">
                </form>
            </td>
        </tr>
        <?php
    }
    ?>
</table>


<?php
include ("./rodape.php");
?>
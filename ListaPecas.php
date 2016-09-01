<?php
include ("./cabpainel.php");
include("./banco/BDConecta.php");
include("./banco/BDPecas.php");
?>
<br>
<table class="tabelaEsquerda">
    <tr>
        <td>
            <form name="inserir" action="FormCadastraPecas.php" method="POST">
                <input type="hidden" name="id" value="">
                <input class="btn btn-default" type="submit" alt="Submit" width="48" height="48" title="Inserir nova Peça" value="Inserir nova Peça">
            </form>
        </td>
        <td>
    </tr>
</table>
<h1>Lista de Pecas Cadastradas </h1>

<table class="table table-striped table-bordered">
    <tr>
        <th>
            ID
        </th>

        <th>
            NOME
        </th>

        <th>
            MARCA
        </th>

        <th>
            QUANTIDADE
        </th>

        <th>
            CUSTO
        </th>

        <th>
            VALOR
        </th>

        <th>
            LOCALIZACAO
        </th>

        <th>
            APLICACAO
        </th>

    </tr>
    <?php
    $pecas = listaPecas($conexao);
    foreach ($pecas as $peca) {
        ?>    
        <tr>
            <td> <?= $peca['id'] ?> </td>
            <td> <?= $peca['nome'] ?> </td>
            <td> <?= $peca['marca'] ?> </td>
            <td> <?= $peca['quantidade'] ?> </td>
            <td> <?= $peca['custo'] ?> </td>
            <td> <?= $peca['valor'] ?> </td>
            <td> <?= $peca['localizacao'] ?> </td>
            <td> <?= $peca['aplicacao'] ?> </td>

        <!--            <td>
                        <form action="FormAlteraCliente.php" method="POST">
                            <input type="hidden" name="id" value="<?= $cliente['id'] ?>">
                            <input type="submit" value="Ver" alt="Submit" width="24" height="24" title="Detalhar">
                        </form>
                    </td>
                    <td>
                        <form action="DeletaCliente.php" method="POST">
                            <input type="hidden" name="id" value="<?= $cliente['id'] ?>">
                            <input type="submit" value="Excluir" alt="Submit" width="24" height="24" title="Excluir">
                        </form>
                    </td>-->
        </tr>
        <?php
    }
    ?>
</table>


<?php
include ("./rodape.php");
?>
<?php 
include("./cabecalho.php");
include("./banco/BDConecta.php");
include("./banco/BDCidade.php");

?>

<table class="tabelaEsquerda">
    <tr>
        <td>
            <form name="inserir" action="FormCadastraCidade.php" method="POST">
                <input type="hidden" name="id" value="">
                <input type="submit" alt="Submit" width="48" height="48" title="Inserir nova Cidade" value="Inserir nova Cidade">
            </form>
        </td>
        <td>
    </tr>
</table>

<h1>Cidades Cadastradas</h1>

<table class="table table-striped table-bordered">
    <tr>
        <th>
            ID 
        </th>

        <th>
             Cidade
        </th>

        <th> UF </th>

        <th> </th>

        <th> </th>
    </tr>
    <?php
    $cidades = listaCidades($conexao);
    foreach( $cidades as $cidade ){
    ?>    
        <tr>
            <td> <?= $cidade['id'] ?> </td>
            <td> <?= $cidade['nome'] ?> </td>
            <td> <?= $cidade['uf'] ?> </td>

            <td>
                <form name="Excluir" action="DeletaCidade.php" method="POST">
                    <input type="hidden" name="id" value="<?= $cidade['id'] ?>">
                    <input type="submit" width="48" height="48" title="Excluir" value="Excluir">
                </form>
            </td>
        </tr>
    <?php    
    }
    ?>
</table>

<?php
include("./rodape.php");
?>
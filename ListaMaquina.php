<?php
include ("./cabecalho.php");
include("./banco/BDConecta.php");
include("./banco/BDCliente.php");
include("./banco/BDMaquina.php");
?>

<table class="tabelaEsquerda">
    <tr>
        <td>
            <form name="inserir" action="FormCadastraMaquina.php" method="POST">
                <input type="hidden" name="id" value="">
                <input type="submit" alt="Submit" width="48" height="48" title="Inserir nova Máquina" value="Inserir nova Máquina">
            </form>
        </td>
        <td>
    </tr>
</table>
<h1>Lista de Máquinas Cadastradas </h1>

<table class="table table-striped table-bordered">
    <tr>
        <th>ID</th>

        <th>MARCA</th>

        <th>MODELO</th>

        <th>ANO</th>

        <th>COR</th>

        <th>SÉRIE</th>

        <th>
            NÚMERO DO MOTOR
        </th>

        <th>
            CUSTO
        </th>

        <th>
            VALOR
        </th>

        <th>
            STATUS
        </th>

        <th>
            CLIENTE
        </th>

    </tr>
    <?php
    $maquinas = listaMaquinas($conexao);
    foreach ($maquinas as $maquina) {
        ?>    
        <tr>
            <td> <?= $maquina['id'] ?> </td>
            <td> <?= $maquina['marca'] ?> </td>
            <td> <?= $maquina['modelo'] ?> </td>
            <td> <?= $maquina['ano'] ?> </td>
            <td> <?= $maquina['cor'] ?> </td>
            <td> <?= $maquina['serie'] ?> </td>
            <td> <?= $maquina['nmotor'] ?> </td>
            <td> <?= $maquina['custo'] ?> </td>
            <td> <?= $maquina['valor'] ?> </td>
            <td> <?= $maquina['status'] ?> </td>
            <td> <?= $maquina['id_cliente'] ?> </td>

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
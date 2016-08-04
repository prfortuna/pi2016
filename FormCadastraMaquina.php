<?php
include("cabecalho.php");
include("./banco/BDConecta.php");
include ("./banco/BDCliente.php");

$clientes = listaClientes($conexao);
?>

<h1>Cadastro de Máquina</h1>
<form action="CadastraMaquina.php" method="POST">
    <table class="table">
        <tr>
            <td>Marca:</td>
            <td><input class="form-control" type="text" name="marca" required="required" value="" > </td>
        </tr>
        <tr>
            <td>Modelo:</td>
            <td><input class="form-control" type="text" name="modelo" required="required" value="" > </td>
        </tr>
        <tr>
            <td>Ano:</td>
            <td><input class="form-control" type="text" name="ano" required="required" value="" > </td>
        </tr>
        <tr>
            <td>Cor:</td>
            <td><input class="form-control" type="text" name="cor" required="required" value="" > </td>
        </tr>
        <tr>
            <td>Série:</td>
            <td><input class="form-control" type="text" name="serie" required="required" value="" > </td>
        </tr>
        <tr>
            <td>Número Motor:</td>
            <td><input class="form-control" type="text" name="nmotor" required="required" value="" > </td>
        </tr>
        <tr>
            <td>Custo:</td>
            <td><input class="form-control" type="text" name="custo" required="required" value="" > </td>
        </tr>
        <tr>
            <td>Valor:</td>
            <td><input class="form-control" type="text" name="valor" required="required" value="" > </td>
        </tr>
        <tr>
            <td>Status:</td>
            <td><input class="form-control" type="text" name="status" required="required" value="" > </td>
        </tr>
        <tr>
            <td>Cliente:</td>
            <td>
                <select class="form-control" name="id_cliente">
                    <?php foreach ($clientes as $cliente) { ?>
                        <option value="<?= $cliente['id'] ?>">
                            <?= $cliente['nome'] ?> 
                        </option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td> <input class="btn-primary" type="submit" value="Cadastrar"> </td>
        </tr>
    </table>
</form>     

<?php
include ("rodape.php");

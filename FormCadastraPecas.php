<?php
include("cabecalho.php");
include("./banco/BDConecta.php");
include ("./banco/BDPecas.php");

$clientes = listaPecas($conexao);
?>

<h1>Cadastro de Pecas</h1>
<form action="CadastraPecas.php" method="POST">
    <table class="table">
        <tr>
            <td>Nome:</td>
            <td><input class="form-control" type="text" name="nome" required="required" value="" > </td>
        </tr>
        <tr>
            <td>Marca:</td>
            <td><input class="form-control" type="text" name="marca" required="required" value="" > </td>
        </tr>
        <tr>
            <td>Quantidade:</td>
            <td><input class="form-control" type="text" name="quantidade" required="required" value="" > </td>
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
            <td>Localizacao:</td>
            <td><input class="form-control" type="text" name="localizacao" required="required" value="" > </td>
        </tr>
        <tr>
            <td>Aplicacao:</td>
            <td><input class="form-control" type="text" name="aplicacao" required="required" value="" > </td>
        </tr>
        <tr>
            <td></td>
            <td> <input class="btn-primary" type="submit" value="Cadastrar"> </td>
        </tr>
    </table>
</form>     

<?php
include ("rodape.php");

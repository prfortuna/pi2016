<?php
include("cabecalho.php");
include("./banco/BDConecta.php");
include ("./banco/BDCidade.php");

$cidades = listaCidades($conexao);
?>

<h1>Cadastro de Cliente</h1>
<form action="CadastraCliente.php" method="POST">
    <table class="table">
        <tr>
            <td>Nome Completo:</td>
            <td><input class="form-control" type="text" name="nome" required="required" value="" > </td>
        </tr>
        <tr>
            <td>Endereço:</td>
            <td><input class="form-control" type="text" name="endereco" required="required" value="" > </td>
        </tr>
        <tr>
            <td>Telefone:</td>
            <td><input class="form-control" type="tel" name="telefone" required="required" value=""> </tr>
                    </td>
                    </tr>
                    <tr>
                        <td>CPF:</td>
                        <td><input class="form-control" type="text" name="cpf" required="required" value="" > </td>
                    </tr>
                    <tr>
                        <td>Cidade:</td>
                        <td>
                            <select class="form-control" name="id_cidade">
                                <?php foreach ($cidades as $cidade) { ?>
                                    <option value="<?= $cidade['id'] ?>">
                                        <?= $cidade['nome'] ?> - <?= $cidade['uf'] ?> 
                                    </option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Email:</td>
                        <td><input class="form-control" type="text" name="email" required="required" value="" > </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> <input class="btn-primary" type="submit" value="Cadastrar"> </td>
                    </tr>
    </table>
</form>     

<?php
include ("rodape.php");

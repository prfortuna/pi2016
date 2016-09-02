<?php

session_start();

include("cabecalho.php");
include ("./banco/BDConecta.php"); 
include ("./banco/BDCidade.php"); 
include ("./banco/BDCliente.php");


$cidades = listaCidades($conexao);

?>

        <h2>Cadastro de Cliente</h2>
        <form action="AlteraCliente.php" method="POST">
            <input type="hidden" name="id" value="<?=$cliente['id']?>" >
            <table class="table">
                <tr>
                    <td>Nome:</td>
                    <td><input class="form-control" type="text" name="nome" required="required" value="<?=$cliente['nome']?>" > </td>
                </tr>
                <tr>
                    <td>Endereço:</td>
                    <td><textarea class="form-control" name="endereco"><?=$cliente['endereco']?></textarea></td>
                </tr>
                <tr>
                    <td>Telefone:</td>
                    <td><input class="form-control" type="number" name="telefone" required="required" value="<?=$cliente['telefone']?>" ></td>
                </tr>
                <tr>
                    <td>RG:</td>
                    <td><input class="form-control" type="text" name="rg" required="required" value="<?=$cliente['rg']?>"></td>
                </tr>
                <tr>
                    <td>CPF:</td>
                    <td><input class="form-control" type="text" name="cpf" required="required" value="<?=$cliente['cpf']?>"></td>
                </tr>
                <tr>
                    <td>Cidade:</td>
                    <td>
                        <select class="form-control" name="cidade_id">
                        <?php foreach ($cidades as $cidade) {
                            $atual = $cliente['cidade_id'] == $cidade['id'];
                            $selecao = $atual ? "selected='selected'" : "";                          
                             ?>
                            <option value="<?=$cidade['id']?>" <?=$selecao?>>
                                    <?=$cidade['nome']?> - <?=$cidade['uf']?>
                            </option>
                        <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>CEP:</td>
                    <td><input class="form-control" type="number" name="cep" required="required" value="<?=$cliente['cep']?>" ></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input class="form-control" type="text" name="email" required="required" value="<?=$cliente['email']?>" ></td>
                </tr>
                <tr>
                    <td></td>
                    <td> <input class="btn-primary" type="submit" value="Salvar"> </td>
                </tr>
            </table>
        </form>     

<?php include ("rodape.php");

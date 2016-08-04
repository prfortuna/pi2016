<?php 
$conexao = mysqli_connect('localhost', 'root', '') or die ('Erro ao Conectar Banco!'); 
if($conexao):
    
    $bd = mysqli_select_db($conexao, 'baseproj')or die ('Erro ao Selecionar Banco!');
    if($bd){
        return $bd;
    }
endif;

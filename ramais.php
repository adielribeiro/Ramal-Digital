<?php
//chama o arquivo de configuração com o banco
require "banco.php";
require "ajudantes.php";

$dados = buscar_setor($conexao);

$ramais = buscar_ramais($conexao, $_GET['setores']);

include "template.php";

?>









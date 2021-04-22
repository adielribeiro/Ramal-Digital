<?php
//chama o arquivo de configuração com o banco
require "banco.php";
require "ajudantes.php";


$nomes = $_GET['nomes'];

$dados = buscar_setor($conexao);

$ramais = buscar_nomes($conexao, $nomes);

include "template.php";












<?php

require "banco.php";

remover_ramal($conexao,	$_GET['id']);

header('Location: ramal.php');

?>

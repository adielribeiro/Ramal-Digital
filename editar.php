<?php

   
  require "banco.php";
   
 if(isset($_GET['nome']) && $_GET['nome'] != '')
 {
   $ramal = array();
   $ramais = array();
   
   $ramal['id'] = $_GET['id'];
   $ramal['nome'] = $_GET['nome'];
   
    if(isset($_GET['id_setor_db']))
	{
      $ramal['id_setor_db'] = $_GET['id_setor_db'];
     }
    else
	{
      $ramal['id_setor_db'] = '';
    }
	
    if(isset($_GET['ramal']))
	{
      $ramal['ramal'] = $_GET['ramal'];
     }
    else
	{
      $ramal['ramal'] = '';
    }
	
    if(isset($_GET['ddd']))
	{
      $ramal['ddd'] = $_GET['ddd'];
     }
    else
	{
      $ramal['ddd'] = '';
    }
    
	if(isset($_GET['grupo']))
	{
      $ramal['grupo'] = $_GET['grupo'];
     }
    else
	{
      $ramal['grupo'] = '';
    }
	
	if(isset($_GET['email']))
	{
      $ramal['email'] = $_GET['email'];
     }
    else
	{
      $ramal['email'] = '';
    }
	
      editar_ramal($conexao, $ramal);

   
 } 
 
   $ramal = buscar_setores($conexao, $_GET['id']);
   $dados = buscar_setor($conexao);

   require "cadastrar.php";
  
  
?>
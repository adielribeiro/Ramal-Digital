<?php

$bdServidor	=	'127.0.0.1';
$bdUsuario	=	'root';
$bdSenha	=	'20072008';
$bdBanco	=	'dbramal';
$conexao	=	mysqli_connect($bdServidor,	$bdUsuario,	$bdSenha, $bdBanco);
mysqli_set_charset( $conexao, 'utf8');

																										
if	(mysqli_connect_errno($conexao))	
{
				echo "Problemas	para	conectar	no	banco.	Erro:	";
				echo	mysqli_connect_error();
				die();
}

 //busca dados no BD
function buscar_ramal($conexao)
{
	$sqlBusca	=	'SELECT	* FROM	dbramal ORDER BY nome';
	$resultado	=	mysqli_query($conexao,	$sqlBusca);
	$ramal = array();
	while ($ramal = mysqli_fetch_assoc($resultado))	
	{
	  $ramais[] = $ramal;
	}
	return $ramais;
}

function buscar_setor($conexao)
{
	$sqlBusca	=	'SELECT	* FROM	setores ORDER BY nome_setor';
	$resultado	=	mysqli_query($conexao,	$sqlBusca);
	$setor =	array();
	while ($db = mysqli_fetch_assoc($resultado))	
	{
	  $setor[] = $db;
	}
	return $setor;
}

function buscar_ramais($conexao, $setores) 
{
	$found = array();
	$sqlBusca	='SELECT dbramal.id, dbramal.nome, dbramal.id_setor_db, dbramal.ramal, dbramal.email 
	               FROM dbramal  INNER JOIN setores ON dbramal.id_setor_db = setores.id_setor 
				   WHERE  setores.id_setor = '.$setores;

	$resultado	=	mysqli_query($conexao, $sqlBusca);
	if($resultado->num_rows > 0)
	{
		while($linha = mysqli_fetch_assoc($resultado))
		{
			$found[] = $linha;
		}
	}
	return $found;
	
}


function buscar_nomes($conexao, $nomes) 
{
	$sqlBusca ="SELECT * FROM dbramal WHERE nome  LIKE '%$nomes%' order by nome";
					             
	$resultado	=	mysqli_query($conexao, $sqlBusca);
	$res =	array();
	if($resultado->num_rows != 0)
	{
 	  while ($db = mysqli_fetch_assoc($resultado))	
	    {
	      $res[] = $db;
	   }
	}
	   return $res;
	
}


function gravar_ramal($conexao, $ramal)
	{
		$sqlGravar	= "INSERT	INTO	dbramal
					(nome, id_setor_db, ramal, ddd, grupo, email)
						VALUES
						(
						  '{$ramal['nome']}',
						  '{$ramal['id_setor_db']}',
						  '{$ramal['ramal']}',
						  '{$ramal['ddd']}',
						  '{$ramal['grupo']}',
						  '{$ramal['email']}'
				     	)" ;
						
		mysqli_query($conexao,	$sqlGravar);
	}
	
	function editar_ramal($conexao, $ramal)
	{
		$sqlEditar	= "UPDATE dbramal SET
					
						  nome = '{$ramal['nome']}',
				   id_setor_db = '{$ramal['id_setor_db']}',
						 ramal = '{$ramal['ramal']}',
						   ddd = '{$ramal['ddd']}',
						 grupo = '{$ramal['grupo']}',
						 email = '{$ramal['email']}'
				    WHERE id= {$ramal['id']}" ;
						
		mysqli_query($conexao,$sqlEditar);
	}
	

function buscar_setores($conexao,$id)
{
	$sqlBusca	=	'SELECT	* FROM	dbramal where id= '.$id;
	$resultado	=	mysqli_query($conexao,	$sqlBusca);
	return  mysqli_fetch_assoc($resultado);
	
	
}

function remover_ramal($conexao, $id)
{
	$sqlRemover	=	"DELETE	FROM dbramal WHERE	id	= {$id}";
	mysqli_query($conexao,	$sqlRemover);
}

?>
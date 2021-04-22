<?php




function traduz_setor($codigo)
{
	$id_setor_db =	'';
	
	  switch ($codigo)	
	  {
		case	1:
		   $id_setor_db	= 'TI';
		break;
		
	    case 2:
		 $id_setor_db =	'Tecnologia';
		break;
		
		
		}
	return $id_setor_db;
}

?>
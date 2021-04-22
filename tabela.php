<table id="ramais" class="table table-hover">	 
        <tr>
		   <th>Nome</th>
		   <th>Setor</th>
		   <th>Ramal</th>
		   <th>Email</th>
		</tr>	
		
	    <?php foreach ($ramais as $ramal) : ?>	
		 <tr>
		   <td>
		     <?php echo $ramal['nome']; ?>
		   </td>
		   <td class="setor">
		      <?php echo traduz_setor($ramal['id_setor_db']); ?>
		   </td>
		   <td >
		      <?php echo $ramal['ramal'];?>
		   </td>
		   <td >
		      <?php echo $ramal['email']; ?>
		   </td>
		   <td>
			   <a class="link" href="editar.php?id=<?php echo $ramal['id'];  ?>">Editar</a>
		  </td> 
		 </tr>	
	    <?php endforeach; ?>		
</table>


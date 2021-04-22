 <form>
 	<input	type="hidden" name="id" value="<?php echo	$ramal['id'];	?>"	/>
	<fieldset>	
	    <label>
		  Nome
		   <input type="text" name="nome"
     		value="<?php echo $ramal['nome'];	?>"	/>
		</label>
		</br>
		</br>
		
		<label>
		 <select name="id_setor_db">
		   <option value="" selected = selected>Setores</option>
     
            <?php foreach($dados as $setores)
	          { ?>
              <option  name="setor" value="<?php echo $setores['id_setor'] ?>"><?php echo $setores['nome_setor'] ?></option>	
             <?php } ?>
		   </select>
		</label>
		 </br>
		 </br>
		 
		<label>
		  Ramal
		  <input type="text" name="ramal"
     		value="<?php echo $ramal['ramal'];	?>"	/>
		 </label>
		 </br>
		 </br>
		 
		 <label>
		  Telefone
		  <input type="text" name="ddd"
     		value="<?php echo $ramal['ddd'];	?>"	/>
		 </label>
		 </br>
		 </br>
		 
		 <label>
		  Grupo
		  <input type="text" name="grupo"
     		value="<?php echo $ramal['grupo'];	?>"	/>
		 </label>
		 </br>
		 </br>
		 
		 <label>
		  E-mail
		  <input type="text" name="email"
     		value="<?php echo $ramal['email'];	?>"	/>
		 </label>
		 
	</fieldset>
	
	<fieldset>	
		
         <input	type="submit" value="<?php	echo ($ramal['id']	> 0) ? 'Atualizar' : 'Cadastrar'; ?> " />
		 &nbsp;&nbsp;&nbsp;<a href="index.php"><<< VOLTAR</a>
	</fieldset>
	
		
</form>
	 
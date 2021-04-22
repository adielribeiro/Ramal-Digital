
<div class="container">
  <div >
    <form class="form-inline" name="" method="GET" action="ramais.php">
     </br></br>
     <label><b><font size="4">Buscar por Setor </font></b></label>
     <select class="form-control-sm" name="setores" id="setores">
         <option value="" selected = selected>Selecione...</option>&nbsp;&nbsp;
         <?php foreach($dados as $setor)
	       { ?>
              <option value="<?php echo $setor['id_setor'] ?>">
              <?php echo $setor['nome_setor'] ?></option>
         <?php } ?>
         <input class="botao btn-sm" type="submit" value="Buscar" />		  
      </select>
      </br>
    </form>
   </div>
   </br>
   <div>
     <form class="form-inline" method="GET" action="nomes.php">
      <div class="input-group mb-3">
         <label><b><font size="4">Buscar por Nome</font></b></label>&nbsp;
         <input type="text" size="5" class="form-control form-control-sm" name="nomes" id="nomes">
         <button class="botao btn-sm" type="submit">Buscar</button>
      </div>
     </form>
   </div>
 </div>

 <div class="container">
   <form class="form-inline" name="" method="GET" action="cadastro.php">
     <div class="d-flex flex-row bd-highlight mb-3">
       <div>
         <a href="index.php"><<< VOLTAR</a>
        </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="d-flex justify-content-between">
          <button class="botao btn-sm" type="submit">Novo Cadastro</button>
        </div>
      </div>
    </form>
  </div>

</div>




<!doctype html>
<html lang="pt-br">
  <head>
       <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ramal Digital</title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <!--<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>-->
        <!--<script type="text/javascript" src="js/bootstrap.min.js"></script>-->	
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">-->
        <link rel="stylesheet" href="estilos/estilos.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
      
      <script type="text/javascript" >
            function openModalTermo(){
              $('#modal_termo').modal('show');
            }

            function CloseModalTermo(){
              $('#modal_termo').modal('toggle');
            }
      
      </script>
</head>

<body>
      <div class="body">

         <div class="body">
            <div class="img-cont">
                <div class="imagem">
                    <img src="./img/logo.png" />
                </div>
            </div>
            <div class="container">
                    <ul class="nav nav-tabs justify-content-center">
                      <li class="nav-item bg-danger" >
                          <a style="color:#FFF" class="nav-link" href="index.php">HOME</a>
                      </li>
                      <li class="nav-item" style="background-color: #4eaa6d;">
                          <a style="color:#FFF " class="nav-link" href="#" target="_blank" >MENU 1</a>
                      </li>
                      <li class="nav-item" style="background-color: #4eaa6d;">
                          <a style="color:#FFF" class="nav-link" href="#"  target="_blank">MENU 2</a>
                      </li>
                      <li class="nav-item" style="background-color: #4eaa6d;">
                          <a style="color:#FFF"  class="nav-link" href="#" target="_blank">MENU 2</a>
                      </li>
                      <li class="nav-item dropdown" style="background-color: #4eaa6d;">
                          <a class="nav-link dropdown-toggle" style="color:#FFF;" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            DropDown
                          </a>
                          <ul class="dropdown-menu"  style=" color:#FFF; background-color: #4eaa6d;">
                                <li>
                                    <a style="color:#FFF"  onclick="openModalTermo()" class="dropdown-item" >
                                      Lorem Ipsum
                                    </a>
                                </li>
                          </ul>
                      </li>
                  </ul> 
            </div> 
            <div class="container">
                <div class="d-flex">
                  <div>
                      <?php require 'formulario.php'; ?>
                  </div>
                  <div class="d-flex">
                      <?php require 'tabela.php';	?>
                  <div>
             </div>
         </div>
        </div>
         </br>
         <div class="container"><div class="container">
            <a href="index.php"><<< VOLTAR</a>
         </div> 
         </br>
      </div>
        
      <div class="rodape">
          <div style="text-align:center">
              <p>De acordo com nosso Programa de Governança de Dados, todos os dados pessoais coletados, guardados e tratados pela "ENTIDADE" seguem rigorosamente os protocolos de privacidade</br>
              previstos na Lei 13.709/2018 - Lei Geral de Proteção de Dados.</p>
              <p>Copyright ©2021. Todos os direitos reservados.</p>
          </div>
      </div>
    <?php require "modal_termo.php"; ?>
</body>
</html>

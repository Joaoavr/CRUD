<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" >

    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="image-Z7j4B9NIF-transformed">
    <title>Bert_Salad</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg" style="background-color: #B3ECA7;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="image-Z7j4B9NIF-transformed.png" alt="" width="80" height="74" class="d-inline-block align-text-top"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?Page=novo">Novo Usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?Page=ListU"> Listar User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?Page=novoP">Novo Prato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?Page=ListP">Listar Pratos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

 <div class="container">
    <div class="row">
        <div class="col mt-5">
        <?php
          include("config.php");
          switch(@$_REQUEST["Page"]){
            case "novo":
                include("User\Novouser.php");
                break;
            case "novoP":
                include("Prato\NewPrato.php");
                break;
            case "ListU":
                include("User\ListUser.php");
                break;
            case "ListP":
                include("Prato\ListPrato.php");
                break;
            case "salvar":
                include("User\saveuser.php");
                break;
              case "salvaP":
                include("Prato\savePrato.php");
                 break;
                case "editar":
                    include("User\edituser.php");
                    break;
                case "editaP":
                    include("Prato\editPrato.php");
                    break;
            default: 
              print " <h1>Bem Vindos!</h1> ";
          }
   ?>
    </div>
    </div>
    </div>
 




<script src="js/bootstrap.bundle.min.js"></script>

    
  </body>
</html>
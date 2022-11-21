<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
  <div class="container">
    <a class="navbar-brand" href="#">CharlieBookstore</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <!-- Página de Login -->
          <a class="nav-link active" aria-current="page" href="http://localhost/phpecom/index.php">Home</a>
        </li>
        <li class="nav-item">
           <!-- Página de cadastro de Adm -->
          <a class="nav-link" href="http://localhost/phpecom/cadastro/cadastroAdm.php">Novo usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/phpecom/user/listaAdm.php">Listar usuários</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/phpecom/cadastro/cadastroCategoria.php">Categoria</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Produto
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Lista de produtos</a></li>
            <li><a class="dropdown-item" href="http://localhost/phpecom/cadastro/cadastroProduto.php">Produto Imagem</a></li>
            <li><a class="dropdown-item" href="#">Produto Estoque</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
   

<!-- Função para o Navbar -->
<div class="container">
    <div class="row">
        <div class="col mt-5" >
        <?php
    switch(@$_REQUEST["page"]){
        case "novo":
            include("registroAdm.php");
            break;
        case "listar":
        include("listarAdmin.php");
        break;
        default:
        print "<h1>Bem vindos ao dashboard da CharlieBookstore!</h1>";
    } 
    ?> 
        </div>
    </div>
</div> 


<!-- Área do login -->

<div class="py-5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <?php if(isset($_SESSION['message'])) 
        {
            ?>        
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
             <strong>Atenção,</strong> <?= $_SESSION['message']; ?>
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
        unset($_SESSION['message']);
        } 
         ?>
            <div class="card">
                <div class="card-header">
                    <h4> Faça o seu login</h4>
                </div>
                <div class="card-body">
                    <form action="função/authcode.php" method="POST">                                      
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">E-mail</label>
                            <input type="email" name="email" class="form-control"  placeholder="Digite o seu  e-mail">                            
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                            <input type="password" name="senha" class="form-control" placeholder="Digite a sua senha">
                        </div>
                                               
                        <button type="submit" name="registrar" class="btn btn-primary">Fazer login</button>
                    </form>
                </div>
            </div>         

        </div>
    </div>
</div>
</div>

    <?php include('includes/footer.php') ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
  <div class="container">
    <a class="navbar-brand" href="http://localhost/phpecom/index.php">CharlieBookstore</a>
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
          <a class="nav-link dropdown-toggle" href="#" role="hover" data-bs-toggle="dropdown" >
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

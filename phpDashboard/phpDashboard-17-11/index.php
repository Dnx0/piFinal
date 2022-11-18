<?php include('includes/header.php') ?>
    

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


<?php include('includes/footer.php'); ?>

    <?php include('includes/footer.php') ?>
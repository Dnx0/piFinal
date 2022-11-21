<?php 
session_start();
include('../includes/header.php');
include('../config/dbcon.php');
 ?>

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
                    <h4> Cadastro de produto</h4>
                </div>
                <div class="card-body">
                     <!-- Leva para a função authcode que grava no banco de Dados -->
                    <form action="../função/authcode.php" method="POST">
                    <div class="mb-3">
                            <label  class="form-label">Nome</label>
                            <input type="text" name="PRODUTO_NOME" class="form-control"  placeholder="Digite o nome do produto">                      
                    </div>                            
                        <div class="mb-3">
                            <label  class="form-label">Desconto</label>
                            <input type="text" name="PRODUTO_DESC" class="form-control"  placeholder="Digite o desconto">
                            
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Preço</label>
                            <input type="text" name="PRODUTO_PRECO" class="form-control" placeholder="Qual o seu preço">
                        </div>                     
                       
                        <div class="mb-3">
                            <label  class="form-label">Anexar imagem</label>
                            <input type="file" name="IMAGEM_URL" class="form-control" placeholder="Imagem produto">
                        </div>        

                        <button type="submit" name="registrar" class="btn btn-primary">Cadastrar o produto</button>
                    </form>
                </div>
            </div>         

        </div>
    </div>
</div>
</div>

<?phpinclude ('../includes/footer.php'); ?>
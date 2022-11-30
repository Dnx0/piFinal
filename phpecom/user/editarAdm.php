<?php include('../includes/header.php');?>
<?php include ('../função/authcode.php');?>


<div class="py-5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">      
            <div class="card">
                <div class="card-header">
                    <h4> Editar usuário</h4>
                </div>
                <div class="card-body">
                    <!--Vai preencher automaticamente os campo -->
                <?php 
                $sql = "SELECT * FROM ADMINISTRADOR WHERE ADM_ID=".$_REQUEST["ADM_ID"];
                $res = $con->query($sql);
                $row = $res->fetch_object();
                 ?>
                    <!-- Leva para a função authcode que grava no banco de Dados -->
                    <form action="../função/authcode.php" method="POST">
                    <div class="mb-3">
                            <label  class="form-label">Nome</label>
                            <input type="text" name="ADM_NOME" class="form-control"  placeholder="Digite o seu nome">                      
                    </div>                            
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">E-mail</label>
                            <input type="email" name="ADM_EMAIL" class="form-control"  placeholder="Digite o seu melhor e-mail">
                            
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                            <input type="password" name="ADM_SENHA" class="form-control" placeholder="Crie a sua senha">
                        </div>       
                        
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirme a senha</label>
                            <input type="password"  class="form-control" placeholder="Repita a sua senha">
                        </div>          
                       
                        <button type="submit" name="registrar" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>         

        </div>
    </div>
</div>
</div>


<?php include('../includes/footer.php'); ?>
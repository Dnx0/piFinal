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
         <!--Incio do formulário em Bootstrap -->
            <div class="card">
                <div class="card-header">
                    <h4> Cadastro de produto</h4>
                </div>
                <div class="card-body">
                     <!-- Leva para a função salvarProduto que grava no banco de Dados -->
                    <form action="../função/salvarProduto.php" method="POST">
                    <div class="mb-3">
                            <label  class="form-label">Nome</label>
                            <input type="text" name="PRODUTO_NOME" class="form-control"  placeholder="Digite o nome do produto">                      
                    </div>                 
                     <!--Textarea para escrever uma descrição e ficar maior que os inputs de texto  -->
                    <div class="mb-3">
                            <label  class="form-label">Descrição</label>
                            <textarea  type="text" name="PRODUTO_DESC" class="form-control"  placeholder="Descrição do produto"> </textarea>              
                    </div>      
                        
                        <div class="mb-3">
                            <label  class="form-label">Preço</label>
                            <input type="text" name="PRODUTO_PRECO" class="form-control" placeholder="Qual o preço?">
                        </div>                     
                       
                        <div class="mb-3">
                            <label  class="form-label">Desconto</label>
                            <input type="text" name="PRODUTO_DESC" class="form-control"  placeholder="Digite o desconto">                            
                        </div>
                        
                        <div class="mb-3">
                            <label  class="form-label">Quantidade</label>
                            <input type="number" name="PRODUTO_QTD" class="form-control"  placeholder="Digite a quantidade">                            
                        </div>

                        <div class="mb-3">
                            <label  class="form-label">Categoria</label>
                            <select name="CATEGORIA" class="form-control" id="">
                                <option>Selecione uma categoria</option>
                                <!-- Pegando as opções de categorias no banco de dados -->
                                <?php
                                    $OP_CATEGORIAS = "SELECT * FROM CATEGORIA";
                                    $OP_CATEGORIA = mysqli_query($con,$OP_CATEGORIAS);
                                    while ($row_CATEGORIAS = mysqli_fetch_assoc($OP_CATEGORIA)){
                                        ?>
                                    <option value="<?php echo row_CATEGORIA['CATEGORIA_NOME'];?>"></option> <?php                                       
                                    }

                                 ?>
                            </select>          
                    </div>      
                    <!--Input type file para subir imagens para o banco de dados  -->
                        <div class="mb-3">
                            <label  class="form-label">Anexar imagem</label>
                            <input type="file" name="IMAGEM_URL" class="form-control" placeholder="Imagem produto">
                        </div>        

                        <button type="submit" name="registrar" class="btn btn-primary">Cadastrar o produto</button>
                    </form>
                </div>
            </div>         
            <!--Fim do formulário em Bootstrap -->
        </div>
    </div>
</div>
</div>

<?phpinclude ('../includes/footer.php'); ?>
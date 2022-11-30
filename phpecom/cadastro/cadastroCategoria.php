<?php 
include('../includes/header.php');
include ('../função/salvarCategoria.php')

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
         <!-- Inicio formuário cadastro de produto -->
            <div class="card">
                <div class="card-header">
                    <h4> Cadastro de produtos</h4>
                </div>
                <div class="card-body">
                    <!-- Leva para a função salvarCategoria.php que grava no banco de Dados -->
                    <form action="../função/salvarCategoria.php" method="POST">
                    <div class="mb-3">
                            <label  class="form-label">Nome da categoria</label>
                            <input type="text" name="CATEGORIA_NOME" class="form-control"  placeholder="Digite o nome da categoria">                      
                    </div> 
                     <!--Textarea para escrever uma descrição e ficar maior que os inputs de texto  -->
                    <div class="mb-3">
                            <label  class="form-label">Descrição</label>
                            <textarea  type="text" name="CATEGORIA_DESC" class="form-control"  placeholder="Descrição da categoria"> </textarea>              
                    </div>                           
                       
                        <button type="submit" name="registrar" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>  
             <!-- Fim formuário cadastro de produto -->       

        </div>
    </div>
</div>
</div>


<h1>Listar Categoria</h1>
<?php
$sql = "SELECT * FROM CATEGORIA ORDER BY CATEGORIA_ID";
$result = $con->query($sql);

$qtd = $result->num_rows;

if($qtd > 0)
{
    print "<table class='table table-hover table-striped table-bordered'>";  
    print "<tr>";
    print "<th>id</th>";
    print "<th>Categoria</th>";   
    print "<th>Descrição</th>"; 
    print "<th>Situação</th>";  
    print "<th>Ações</th>";  
    print "</tr>";  
    while($row = $result->fetch_object()){
        print "<tr>";
        print "<td>".$row->CATEGORIA_ID."</td>";
        print "<td>".$row->CATEGORIA_NOME."</td>";       
        print "<td>".$row->CATEGORIA_DESC."</td>";
        print "<td>".$row->CATEGORIA_ATIVO."</td>";
        print "<td>
                <button class='btn btn-success'>Editar</button>
                <button class='btn btn-danger'>Excluir</button>
            </td>";
        print "</tr>";
    }
    print "</table>";
}
else
{
    print "p class='alert alert-danger'> Nenhuma categoria cadastrada</p>";
}


?>
<?php include('../includes/footer.php'); ?>
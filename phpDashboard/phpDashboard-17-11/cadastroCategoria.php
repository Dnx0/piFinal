<?php 
include('includes/header.php');

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
                    <h4> Cadastro de produtos</h4>
                </div>
                <div class="card-body">
                    <form action="função/authcode.php" method="POST">
                    <div class="mb-3">
                            <label  class="form-label">Nome da categoria</label>
                            <input type="text" name="nomeCat" class="form-control"  placeholder="Digite o nome da categoria">                      
                    </div>                            
                       
                        <button type="submit" name="registrar" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>         

        </div>
    </div>
</div>
</div>


<h1>Listar Categoria</h1>
/*<?php
$sql = "SELECT * FROM admin";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd > 0)
{
    print "<table class='table table-hover table-striped table-bordered'>";  
    print "<tr>";
    print "<th>id</th>";
    print "<th>Categoria</th>";   
    print "<th>Criado em</th>";
    print "<th>Ações</th>";
    print "</tr>";  
    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->idCat."</td>";
        print "<td>".$row->nomeCat."</td>";       
        print "<td>".$row->criadoCat."</td>";
        print "<td>
                <button onclick=\"location.href='?page=editar&id=".$row->id."'\" class='btn btn-sucess'>Editar</button>
                <button class='btn btn-danger'>Excluir</button>
            </td>";
        print "</tr>";
    }
    print "</table>";
}
else
{
    print "p class='alert alert-danger'> Nenhum usuário cadastrado</p>";
}


?>*/


<?php include('includes/footer.php'); ?>
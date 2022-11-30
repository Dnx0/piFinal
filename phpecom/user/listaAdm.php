<?php include('../includes/header.php'); ?> 
<?php include('../config/dbcon.php'); ?> 
<h1>Listar usuários</h1>
<?php

$sql = "SELECT * FROM ADMINISTRADOR ORDER BY ADM_ID DESC";
$result = $con->query($sql);

/*$res = $conn->query($sql);*/

$qtd = $result->num_rows; 

if($qtd > 0)
{
    print "<table class='table table-hover table-striped table-bordered'>";  
    print "<tr>";
    print "<th>ID</th>";
    print "<th>Nome</th>";
    print "<th>E-mail</th>";
    print "<th>Senha</th>";   
    print "<th>Situação</th>";  
    print "<th>Ações</th>";
    print "</tr>";  
    while($row = $result->fetch_object()){
        print "<tr>";
        print "<td>".$row->ADM_ID."</td>";
        print "<td>".$row->ADM_NOME."</td>";
        print "<td>".$row->ADM_EMAIL."</td>";
        print "<td>".$row->ADM_SENHA."</td>";
        print "<td>".$row->ADM_ATIVO."</td>";        
        print "<td>
               <a class='btn btn-success'>Editar</a>
                <a class='btn btn-danger'>Excluir</a>
            </td>";
        print "</tr>";
    }
    print "</table>";
}
else
{
    print "p class='alert alert-danger'> Nenhum usuário cadastrado</p>";
}


?>
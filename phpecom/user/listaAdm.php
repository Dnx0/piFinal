<h1>Listar usuários</h1>
<?php

$sql = "SELECT * FROM ADMINISTRADOR";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd > 0)
{
    print "<table class='table table-hover table-striped table-bordered'>";  
    print "<tr>";
    print "<th>id</th>";
    print "<th>Nome</th>";
    print "<th>E-mail</th>";
    print "<th>Senha</th>";
    print "<th>Criado em</th>";
    print "<th>Ações</th>";
    print "</tr>";  
    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->idAdmin."</td>";
        print "<td>".$row->nome."</td>";
        print "<td>".$row->email."</td>";
        print "<td>".$row->senha."</td>";
        print "<td>".$row->criado."</td>";
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


?>
<?php 

session_start();
require_once('../config/dbcon.php');

if(isset($_POST['registrar']))
{
    //Criando variaveis com os dados do formulário
    $PRODUTO_NOME = mysqli_real_escape_string($con, $_POST['PRODUTO_NOME']);
    $PRODUTO_DESC = mysqli_real_escape_string($con, $_POST['PRODUTO_DESC']); 
    $PRODUTO_PRECO = mysqli_real_escape_string($con, $_POST['PRODUTO_PRECO']);
    $PRODUTO_DESCONTO = mysqli_real_escape_string($con, $_POST['PRODUTO_DESCONTO']);
    $IMAGEM_URL = mysqli_real_escape_string($con, $_POST['IMAGEM_URL']);
   
    
    
        //Insert dados 
        $insert_query = "INSERT INTO PRODUTO (PRODUTO_NOME,PRODUTO_DESC,PRODUTO_PRECO,PRODUTO_DESCONTO) VALUES ('$PRODUTO_NOME', '$PRODUTO_DESC', '$PRODUTO_PRECO', '$PRODUTO_DESCONTO')";
        $insert_query = "INSERT INTO PRODUTO_IMAGEM (IMAGEM_URL) VALUES ('$IMAGEM_URL')";
        $insert_query_run = mysqli_query($con, $insert_query);

        if($insert_query_run)
        {
            $_SESSION['message'] = "Registro concluido";
            header('Location: ../cadastro/cadastroProduto.php');
           
            
        }
        else
        {
            $_SESSION['message'] = "Erro no registro";
            header('Location: ../index.php');
        }
    }
   


?>
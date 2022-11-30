<?php 

session_start();
require_once('../config/dbcon.php');

if(isset($_POST['registrar']))
{
    //Criando variaveis com os dados do formulário
    $CATEGORIA_NOME = mysqli_real_escape_string($con, $_POST['CATEGORIA_NOME']);
    $CATEGORIA_DESC = mysqli_real_escape_string($con, $_POST['CATEGORIA_DESC']);  
   
    
    
        //Insert dados 
        $insert_query = "INSERT INTO CATEGORIA (CATEGORIA_NOME,CATEGORIA_DESC) VALUES ('$CATEGORIA_NOME', '$CATEGORIA_DESC')";
        $insert_query_run = mysqli_query($con, $insert_query);

        if($insert_query_run)
        {
            $_SESSION['message'] = "Registro concluido";
            header('Location: ../cadastro/cadastroCategoria.php');
           
            
        }
        else
        {
            $_SESSION['message'] = "Erro no registro";
            header('Location: ../index.php');
        }
    }
   


?>
//<?php 

session_start();
require_once('../config/dbcon.php');

if(isset($_POST['registrar']))
{
    $ADM_NOME = mysqli_real_escape_string($con, $_POST['ADM_NOME']);
    $ADM_EMAIL = mysqli_real_escape_string($con, $_POST['ADM_EMAIL']);
    $ADM_SENHA = mysqli_real_escape_string($con, $_POST['ADM_SENHA']);
   
    
    //Vendo se o email já está cadastrado no banco de dados
    $check_email_query = "SELECT ADM_EMAIL FROM admin WHERE ADM_EMAIL='$email'";
    $check_email_query_run = mysqli_query($con, $check_email_query);
/*
    if(mysqli_num_rows($check_email_query_run) > 0)
    {
        $_SESSION['message'] = "Email já está cadastrado";
        header('Location: ../registroAdm.php');
    }

*/

    
        //Insert dados do usuario
        $insert_query = "INSERT INTO ADMINISTRADOR (ADM_NOME,ADM_EMAIL,ADM_SENHA) VALUES ('$ADM_NOME', '$ADM_EMAIL', '$ADM_SENHA')";
        $insert_query_run = mysqli_query($con, $insert_query);

        if($insert_query_run)
        {
            $_SESSION['message'] = "Registro concluido";
            header('Location: ../index.php');
        }
        else
        {
            $_SESSION['message'] = "Erro no registro";
            header('Location: ../cadastro/cadastroAdm.php');
        }
    }
   


?>*/
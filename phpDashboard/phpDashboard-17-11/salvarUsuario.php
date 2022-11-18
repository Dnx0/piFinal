<?php

switch($_REQUEST['acao']){
    case  'cadastrar':

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql = "INSERT INTO admin (nome, email, senha)  VALUES ('{$nome)',  '{$email)',  '{$senha)' ";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert(Cadastro realizado com sucesso)</script>";
                print = "<script>
                location.href;</script>";
            }else{
                print "<script>alert(Não foi possível cadastrar)</script>";
                print = "<script>
                location.href;</script>";
            }

        break;

            case 'editar':
            break;


        case 'excluir':
            break;
    }
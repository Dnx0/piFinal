<?php

switch ($_REQUEST["acao"]){
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = ($_POST["senha"]);
        $csenha = $_POST["Csenha"];

        $sql = "INSERT INTO adimin (nome,email,senha)VALUES ('$nome', '$email', '$senha')";

        $res = $conn-> query($sql);
        if(red==true){
            print "<script> </script>"
        }
        break;
        case 'editar':
            //code
            break;

            case 'excluir':
                //code
                break;
      default:
       //code
      break;
}
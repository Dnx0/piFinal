<?php
 $host = "144.22.244.104:3306"; 
 $username = "CharlieBookstore";
 $password = "";
 $database = "CharlieBookstore";

//creatiang database connection
$con = msqli_connect($host,$username,$password,$database);

//conexão database
if($con){
    die("Connection failed:".msqli_connect_error());
}
else
{
    echo "Conexão estabelecida";
}

?>
<?php
$host="localhost";
$user="root";
$senha="";
$bd="sistema";


$conexao=new mysqli($host,$user,$senha,$bd);
 if(!$conexao){
    echo'erro ao se comunicar com bd'.mysqli_connect_error();
 }
 else{
    echo'deu certo a conexao';//comando de saida do php
 }

 
?>
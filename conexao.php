<?php
$host="localhost";
$user="root";
$senea="";
$bd="sistema";


$conexao=new mysqli($host,$user,$senha,$bd);
 if($conexao){
    echo'erro ao se comunicar com bd'.mysqli_coonnet_error();
 }
 else{
    echo'deu certo a conexao'
 }
?>
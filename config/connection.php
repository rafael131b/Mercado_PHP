<?php


$host="localhost";
$dbname="mercado";
$user="root";
$pass="";

try{

    $conn=new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);

    //ativar modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    $error=$e->get_Message();
    echo "Error : $error ";
}



?>
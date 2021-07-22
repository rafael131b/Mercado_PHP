<?php
include_once("config/url.php");
include_once("config/process.php");


//limpa a mensagem;
if(isset($_SESSION["msg"])){
    $printMsg=$_SESSION["msg"];
    $_SESSION["msg"]="";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="<?=$BASE_URL?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$BASE_URL?>/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>
    <header>
    <div class="container d-flex justify-content-around align-items-center">
     <a href="index.php"><img src="<?=$BASE_URL?>img/logo.jpg" alt="logo" class="img-fluid imagem"></a>
        <nav>
            <ul class="list-item">
                <li class="list-inline-item text-white"><a href="" class="nav-link text-white">Produtos</a></li>
                <li  class="list-inline-item text-white"><a href="<?=$BASE_URL?>/cadastrar.php" class="nav-link text-white">Cadastrar</a></li>
               
            </ul>
        </nav>
    </div>


    </header>
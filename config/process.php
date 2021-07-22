<?php

  session_start();

  include_once("connection.php");
  include_once("url.php");
  

  $data = $_POST;

 
  //MODIFICACOES NO BANCO
  if(!empty($data)){



    //Criar contato
    

    if($data["type"]==="create"){

      
      $nome = $data["nome"];
      $marca = $data["marca"];
      $descricao = $data["descricao"];
      $valor=$data["valor"];
   

      $query = "INSERT INTO produtos (nome, marca, descricao,valor) VALUES (:nome, :marca,:descricao,:valor)";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":nome", $nome);
      $stmt->bindParam(":marca", $marca);
    
    
      $stmt->bindParam(":descricao", $descricao);
      $stmt->bindParam(":valor", $valor);

      try {

        $stmt->execute();
        $_SESSION["msg"] = "Contato criado com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }
    }else if($data["type"]==="edit"){
      $nome = $data["nome"];
      $marca = $data["marca"];
      $descricao = $data["Descricao"];
      $valor=$data["valor"];
      $id = $data["id"];

      $query="UPDATE produtos
      SET nome=:nome,marca=:marca,Descricao=:Descricao,valor=:valor
       WHERE id=:id";
       $stmt=$conn->prepare($query);

      $stmt->bindParam(":nome", $nome);
      $stmt->bindParam(":marca", $marca);
      $stmt->bindParam(":valor", $valor);
      
    
    
      $stmt->bindParam(":Descricao", $Descricao);
      $stmt->bindParam(":nome", $nome);
      $stmt->bindParam(":marca", $marca);
    
    
      $stmt->bindParam(":id", $id);
      $stmt->bindParam(":valor", $valor);

      try {

        $stmt->execute();
        $_SESSION["msg"] = "Contato atualizado com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    }else if($data["type"]==="delete"){

      $id=$data["id"];
      $query="DELETE from produtos WHERE id =:id";
      $stmt=$conn->prepare($query);
      $stmt->bindParam(":id",$id);

      try {

        $stmt->execute();
        $_SESSION["msg"] = "Contato criado com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }
    }
    

    //SELECAO DE DADOS
  
    // Redirect HOME
    header("Location:" . $BASE_URL . "../index.php");
  
  }else{
    $id;

    if(!empty($_GET)){
      $id=$_GET["id"];
    }
    //Retorna os dados de um contato
    if(!empty($id)){
      $query="SELECT * FROM  produtos WHERE id=:id";
      $stmt=$conn->prepare($query);
      $stmt->bindParam(":id",$id);
      $stmt->execute();
      $produto=$stmt->fetch();
    }else{

      //retorna todos  os contatos
      $produtos = [];

      $query = "SELECT * FROM produtos";

      $stmt = $conn->prepare($query);

      $stmt->execute();
      
      $produtos = $stmt->fetchAll();
    }

  }

  //fechar conexao
  $conn=null;
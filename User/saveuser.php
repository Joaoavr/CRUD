<?php
  switch ($_REQUEST["acao"]){
    case "cadastrar":
     $nome = $_POST["nome"];
     $telefone = $_POST["telefone"];
     $endereco = $_POST["endereco"];

     $sql = "INSERT INTO Cliente (nome,telefone,endereco) VALUES ('{$nome}','{$telefone}', '{$endereco}')";

     $res = $conn ->query($sql);

     if($res == true){
          print "<script>alert('cadastrado com sucesso');</script>";
          print "<script>location.href='?Page=ListUser';</script>";
     }
     else{
        print "<script>alert('Não foi possivel cadastrar');</script>";
          print "<script>location.href='?Page=ListUser';</script>";
     }
    break;
    
    case "editar":
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $endereco = $_POST["endereco"]; 
        
      $sql = "UPDATE  Cliente  SET  nome='{$nome}', telefone='{$telefone}', endereco='{$endereco}'  WHERE  id=".$_REQUEST["id"];

        $res = $conn ->query($sql);

     if($res == true){
          print "<script>alert('Editado com sucesso');</script>";
          print "<script>location.href='?Page=ListUser';</script>";
     }
     else{
        print "<script>alert('Não foi possivel Editar');</script>";
          print "<script>location.href='?Page=ListUser';</script>";
     }
    break;

    case "excluir":
        
    $sql = "DELETE FROM Cliente WHERE id=".$_REQUEST["id"];

    $res = $conn ->query($sql);

    if($res == true){
         print "<script>alert('Excluido com sucesso');</script>";
         print "<script>location.href='?Page=ListUser';</script>";
    }
    else{
       print "<script>alert('Não foi possivel Excluir');</script>";
         print "<script>location.href='?Page=ListUser';</script>";
    }

    break;    
  }
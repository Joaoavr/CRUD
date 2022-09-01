<?php
  switch ($_REQUEST["acaoP"]){
    case "cadastrar":
     $nome = $_POST["name"];
     $tipo_Prato = $_POST["tipo_Prato"];
     $preco = $_POST["preco"];

     $sql = "INSERT INTO Prato (nome,tipo_Prato,preco) VALUES ('{$nome}','{$tipo_Prato}', '{$preco}')";

     $res = $conn ->query($sql);

     if($res == true){
          print "<script>alert('cadastrado com sucesso');</script>";
          print "<script>location.href='?Page=ListPrato';</script>";
     }
     else{
        print "<script>alert('Não foi possivel cadastrar');</script>";
          print "<script>location.href='?Page=ListPrato';</script>";
     }
    break;
    
    case "editar":
        $nome = $_POST["nome"];
        $tipo_Prato = $_POST["tipo_Prato"];
        $preco = $_POST["preco"]; 
        
      $sql = "UPDATE  Prato  SET  nome='{$nome}',tipo_Prato='{$tipo_Prato}', preco='{$preco}'  WHERE  id=".$_REQUEST["id"];

        $res = $conn ->query($sql);

     if($res == true){
          print "<script>alert('Editado com sucesso');</script>";
          print "<script>location.href='?Page=ListPrato';</script>";
     }
     else{
        print "<script>alert('Não foi possivel Editar');</script>";
          print "<script>location.href='?Page=ListPrato';</script>";
     }
    break;

    case "excluir":
        
    $sql = "DELETE FROM Prato WHERE id=".$_REQUEST["id"];

    $res = $conn ->query($sql);

    if($res == true){
         print "<script>alert('Excluido com sucesso');</script>";
         print "<script>location.href='?Page=ListPrato';</script>";
    }
    else{
       print "<script>alert('Não foi possivel Excluir');</script>";
         print "<script>location.href='?Page=ListPrato';</script>";
    }

    break;    
  }
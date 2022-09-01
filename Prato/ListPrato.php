<H1>List Pratos</H1>
<?php  
   $sql = "select * from Prato";

   $res = $conn -> query($sql);

   $qtd = $res -> num_rows;

   if($qtd > 0){
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>Tipo de Prato</th>";
    print "<th>Preço</th>";
    print "<th>Ações</th>";
    print "</tr>";
      while($row = $res -> fetch_object()){
        print "<tr>";
        print "<td>" .$row-> id. "</td>";
        print "<td>" .$row-> nome. "</td>";
        print "<td>" .$row-> tipo_Prato. "</td>";
        print "<td>" .$row-> preco. "</td>";
        print "<td class=\"container d-flex justify-content-around\"> <button onclick=\"location.href='?Page=editaP&id=".$row-> id."';\" class='btn btn-success'>Editar</button>
       <button onclick=\"if(confirm('Deseja Excluir?')){location.href='?Page=salvaP&acaoP=excluir&id=".$row-> id."';}else{false;}\"  class='btn btn-danger'>Excluir</button> </td>";
        print "</tr>";
      }
      print "</table>";
   }
   else{
    print "<p class='alert  alert-danger'>Não encontrou resultados</p>";
   }
?>
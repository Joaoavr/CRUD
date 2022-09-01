<h1>Edit Prato</h1>
<?php
    $sql = "select * from  Prato where id=" .$_REQUEST["id"];
    $res = $conn -> query($sql);
    $row = $res -> fetch_object();
?>
<form action="?Page=salvaP" method="POST">
    <input type="hidden" name="acaoP" value="editar">
    <input type="hidden" name="id" value="<?php  print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php  print $row -> nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Tipo</label>
        <input type="text" name="tipo_Prato" value="<?php  print $row -> tipo_Prato; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Preço</label>
        <input type="text" name="preco" value="<?php  print $row -> preco; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class=" btn btn-primary">Enviar</button>
    </div>
</form>
<h1>Edit User</h1>
<?php
    $sql = "select * from  Cliente where id=" .$_REQUEST["id"];
    $res = $conn -> query($sql);
    $row = $res -> fetch_object();
?>
<form action="?Page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php  print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php  print $row -> nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="telefone" value="<?php  print $row -> telefone; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="endereco" value="<?php  print $row -> endereco; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class=" btn btn-primary">Enviar</button>
    </div>
</form>
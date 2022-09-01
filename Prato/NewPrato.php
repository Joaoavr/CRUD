<h1>New Pratos</h1>
<form action="?Page=salvaP" method="POST">
    <input type="hidden" name="acaoP" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="name" placeholder="Digite o nome do prato:" class="form-control">
    </div>
    <div class="mb-3">
        <label>Tipo de Prato</label>
        <input type="text" name="tipo_Prato" placeholder="Digite o tipo de prato:" class="form-control">
    </div>
    <div class="mb-3">
        <label>Preço</label>
        <input type="text" name="preco" placeholder="Digite o preço:" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
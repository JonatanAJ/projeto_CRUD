<h1>novo-usuario</h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
<div class="mb-3">
    <label>nome</label>
    <input type="text" name="nome" class="form-control">
</div>
<div class="mb-3">
    <label>email</label>
    <input type="email" name="email" class="form-control">
</div>
<div class="mb-3">
    <label >senha</label>
    <input type="password" name="senha" class="form-control">
</div>

<div class="mb-3">
    <label>data de nascimento</label>
    <input type="date" name="data_nasc" class="form-control">
</div>
<div class="mb-3">
<button type="submit" class="btn btn-primary">enviar</button>
</div>
</form>
<h1>editar usuario</h1>
<?php
$sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
$res = $conn->query($sql);

if (!$res) {
    die("Erro na consulta SQL: " . $conn->error);
}

$row = $res->fetch_object();

?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
<div class="mb-3">
    <label>nome</label>
    <input type="text" name="nome" class="form-control" value="<?php print$row->nome ?>">
</div>
<div class="mb-3">
    <label>email</label>
    <input type="email" name="email" class="form-control" value="<?php print$row->email?>">
</div>
<div class="mb-3">
    <label >senha</label>
    <input type="password" name="senha" class="form-control" required>
</div>

<div class="mb-3">
    <label>data de nascimento</label>
    <input type="date" name="data_nasc" class="form-control" value="<?php print$row->data_nasc ?>">
</div>
<div class="mb-3">
<button type="submit" class="btn btn-primary">enviar</button>
</div>
</form>
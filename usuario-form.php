<?php

if (!empty($_GET['id'])) {
  $idUsuario = $_GET['id'];
}



if (!empty($idUsuario)) {
  $sql = "SELECT * FROM usuarios WHERE id= " . $idUsuario;
  $res = $conn->query($sql);
  $row = $res->fetch_object();
?>
  <h1>Editar Usuário</h1>
<?php
} else {
?>
  <h1>Cadastrar usuário</h1>
<?php
}
?>

<form action="usuario-formdo.php" method="POST">

  <input type="hidden" name="id" value="<?php
                                        if (!empty($row->id)) print $row->id; ?>">
  <div class="mb-3">
    <label>Nome</label>
    <input type="text" value="<?php if (!empty($row->nome)) print $row->nome; ?>" name="nome" class="form-control">
  </div>


  <div class="mb-3">
    <label>E-mail</label>
    <input type="email" value="<?php if (!empty($row->email)) print $row->email; ?>" name="email" class="form-control
    ">
  </div>

  <div class="mb-3">
    <label>Senha</label>
    <input type="password" name="senha" value="<?php if (!empty($row->senha)) print $row->senha; ?>" class="form-control" required>
  </div>

  <div class="mb-3">
    <label>Telefone</label>
    <input type="number" value="<?php if (!empty($row->telefone)) print $row->telefone; ?>" name="telefone" class="form-control
    ">
  </div>

  <div class="mb-3">
    <label>Data de Nascimento</label>
    <input type="date" value="<?php if (!empty($row->data_nasc))  print(implode("", array_reverse(explode("-", $row->data_nasc)))); ?> " name="data_nasc" class="form-control
    ">

  </div>


  <div class="mb-2">
    <button type="submit" class="btn btn-secondary">Enviar</button>
  </div>
</form>
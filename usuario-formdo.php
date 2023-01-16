<?php
include("config.php");
if (!empty($_POST['id'])) $idUsuario = $_POST['id'];

if (!empty($idUsuario)) {
  $sql = "UPDATE usuarios SET nome = '" . $_POST['nome'] . "', email = '" . $_POST['email'] . "', senha = '" . $_POST['senha'] . "', telefone =" . $_POST['telefone'] . ", data_nasc = '" . $_POST['data_nasc'] . "' WHERE id=" . $idUsuario;
  echo $sql;
  $res = $conn->query($sql);
} else {
  $sql = "INSERT INTO usuarios (nome , email, senha, telefone, data_nasc) VALUES ('" . $_POST['nome'] . "', '" . $_POST['email'] . "','" . $_POST['senha'] . "'," . $_POST['telefone'] . ", '" . $_POST['data_nasc'] . "')";
  $res = $conn->query($sql);
}

if ($res) {

  header('Location: index.php?page=listar');
} else {

  header('Location: index.php?page=editar');
}

<?php
include('config.php');
$idUsuario = $_GET['id'];

$sql = "DELETE FROM usuarios WHERE id=" . $idUsuario;
$res = $conn->query($sql);


header('Location: index.php?page=listar');

<?php
include('../index.php');
include('../Repositorio/UsuariosRepositorio.php');
$dados = $_POST;
$usuarioRepositorio = new UsuarioRepositorio();

$usuarioRepositorio->VerificarCredenciais($dados['email'], $dados['senha']);


?>
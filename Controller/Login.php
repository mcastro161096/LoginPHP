<?php
include('../index.php');
include('../Repositorio/UsuariosRepositorio.php');
$dados = $_POST;
$usuarioRepositorio = new UsuarioRepositorio();

$usuario = $usuarioRepositorio->VerificarCredenciais($dados['email'], $dados['senha']);

if ($usuario == "valido")
{
    # code...
}
else
if ($usuario == "nao encontrado") 
{
    echo "Usuario não existe";
}
echo "Usuario invalido";



?>
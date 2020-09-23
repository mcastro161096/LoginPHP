<?php
include('../View/Login.php');
include('../Repositorio/UsuariosRepositorio.php');
$dados = $_POST;
$usuarioRepositorio = new UsuarioRepositorio();

$usuario = $usuarioRepositorio->VerificarCredenciais($dados['email'], $dados['senha']);

if ($usuario == "valido")
{
    
            $_SESSION['logado'] = "true";
                $_SESSION['email'] = $dados['email'];
                    $_SESSION['senha'] = $dados['senha'];
                        
                header('Location: /LoginPHP/View/Home.php');
}
else
{
$_SESSION['msg'] = $usuario;
header("Refresh: 0; url=../View/Login.php");
}



?>
<?php
include('../index.php');

$dados = $_POST;

VerificarCredenciais($dados['email'], $dados['senha']);


?>
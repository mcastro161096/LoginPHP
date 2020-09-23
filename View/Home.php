<?php
session_start();
include('../Repositorio/UsuariosRepositorio.php');
$usuarioRepositorio = new UsuarioRepositorio();
    $row = $usuarioRepositorio->BuscaDadosDoUsuarioLogado($_SESSION['email'], $_SESSION['senha']);
        $_SESSION['nome'] = $row['Nome'];
            $_SESSION['sobrenome'] = $row['Sobrenome'];
                $_SESSION['datanascimento'] = $row['DataNascimento'];
                    $_SESSION['escolaridade'] = $row['Escolaridade'];
                            $_SESSION['profissao'] = $row['Profissao'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <link href="/LoginPHP/CSS/style.css" rel="stylesheet" type="text/css" />
  <link href="/LoginPHP/CSS/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="/LoginPHP/CSS/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>





<div class="form-group ">
  <div class="input-group center-block">
    <label>Nome</label>
    <input type="text" class="form-control input-lg" value="<?php echo $_SESSION['nome']?>" readonly />

  </div>
</div>







</body>
<script type="text/javascript" src="../Scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="../Scripts/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="../Scripts/validacao.js"></script>

</html>
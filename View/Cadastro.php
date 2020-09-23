<?php
session_start();


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <link href="../LoginPHP/CSS/style.css" rel="stylesheet" type="text/css" />
  <link href="../LoginPHP/CSS/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="../LoginPHP/CSS/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
  <form method="POST" action="/LoginPHP/Controller/LoginController.php">




    <div class="form-group">
      <div class="input-group">
        <label>Nome</label>
        <input type="text" class="form-control input-lg" value="<?php $_SESSION['nome']?>" readonly />

      </div>
    </div>





  </form>

</body>
<script type="text/javascript" src="../Scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="../Scripts/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="../Scripts/validacao.js"></script>

</html>
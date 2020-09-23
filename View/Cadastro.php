<?php
session_start();


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




  <div class="container ">

    <form action="" method="POST">
      <div class="form-group">
        <h3>Seus dados:</h3>
        <div class="input-group ">
          <label>Nome</label>
          <input type="text" class="form-control input-lg" />
        </div>

        <div class="input-group ">
          <label>Sobrenome</label>
          <input type="text" class="form-control input-lg" />
        </div>

        <div class="input-group ">
          <label>Data de nascimento</label>
          <input type="text" class="form-control input-lg" />
        </div>

        <div class="input-group ">
          <label>Escolaridade</label>
          <input type="text" class="form-control input-lg" />
        </div>

        <div class="input-group ">
          <label>Profissão</label>
          <input type="text" class="form-control input-lg" />
        </div>
      </div>

        <input type="submit" class="btn btn-primary btn-lg" name="criar" value="Criar" />
    </form>

  </div>





</body>
<script type="text/javascript" src="/LoginPHP/Scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="/LoginPHP/Scripts/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/LoginPHP/Scripts/validacao.js"></script>

</html>
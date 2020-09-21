<?php

    function Cadastrar(Usuario $usuario)
    {
        $conexao = new mysqli("localhost", "root", "", "dbphp7");
            $query = $conexao->prepare("INSERT INTO Usuarios 
                (Login, Senha, Nome, Sobrenome, DataNascimento, Escolaridade, Profissao) 
                    VALUES (?, ?, ?, ?, ?, ?, ?);");
                $query->bind_param("sssssss",$usuario->getLogin(),
                    $usuario->getSenha(), $usuario->getNome(), $usuario->getSobrenome(), $usuario->getDataNascimento(),
                         $usuario->getEscolaridade(), $usuario->getProfissao());

          $query->execute();               
    }

    function VerificarCredenciais($login, $senha)
    {
        $conexao = new mysqli("localhost", "root", "", "dbphp7");
            $result = $conexao->query("SELECT * FROM Usuarios where Login = $login and Senha = $senha;");
               // $result->bind_param("ss", $login, $senha); 
               if ($result != Null) 
               {
                   # code...
               }

    }



?>
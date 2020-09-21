<?php

    function Cadastrar(Usuario $usuario)
    {
        $conexao = new mysqli("localhost", "root", "", "dbphp7");
            $query = $conexao->prepare("INSERT INTO tb_usuarios 
                (Login, Senha, Nome, Sobrenome, DataNascimento, Escolaridade, Profissao) 
                    VALUES (?, ?, ?, ?, ?, ? ?:);");
                $query->bind_param("sssssss",$usuario->getLogin(),
                    $usuario->getSenha(), $usuario->getNome(), $usuario->getSobrenome(), $usuario->getDataNascimento(),
                         $usuario->getEscolaridade(), $usuario->getProfissao());

          $query->execute();               
    }



?>
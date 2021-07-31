<?php
    function novaConexao($banco ='curso_php'){
        $servidor = '127.0.0.1';
        $utilizador = 'developer';
        $senha = 'Nurses1975*2';

        $conexao = new mysqli($servidor, $utilizador,$senha, $banco);

        if($conexao->connect_error){
            die('Erro: ' . $conexao->connection_error);
        }
        return conexao;
    }
?>
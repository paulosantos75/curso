<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    //-- inicio configuracoes gerais
    $path_site="/var/www/html/gestaoears"; 


    //-- fim de configurcoes gerais

    function novaConexao(){
        //--conexao local
        $banco ='clientes';
        $servidor = 'localhost';
        $utilizador = 'developer';
        $senha = 'Nurses1975*2';

        try {
            $db=new PDO("mysql:host={$servidor};dbname={$banco}", $utilizador,$senha);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // $db->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );

            return $db;
        }catch(PDOException $e){
            die('Erro: ' . $e->getMessage());
        }       
    }
   


    
?>
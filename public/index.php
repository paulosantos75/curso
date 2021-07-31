<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
echo 'index.php<br>';

    //2- navega para o diretorio pai - root do projeto
    require_once(dirname(__FILE__, 2) . '/src/config/config.php');
    require_once(dirname(__FILE__, 2) . '/src/models/User.php');

  

    $user = new User(['name' => 'Lucas', 'email' => 'lucas@sapo.pt']);
 
 print_r(User::get(['id' => 1], 'id, name, email'));

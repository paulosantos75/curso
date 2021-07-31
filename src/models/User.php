<?php

$path = realpath(MODEL_PATH . '/Model.php');
//$path = realpath(dirname(__FILE__). '/Model.php');

require_once($path);

class User extends Model{
    //banco de dados relacional - definicao especifica
    protected static $tableName = 'users';
    protected static $columns = [
        'id', 	
        'name',	
        'password', 
        'email',	
        'start_date',
        'end_date',
        'is_admin'
    ];
}
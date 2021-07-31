<?php

class Model{
    /*banco de dados relacional - definicao geral (variaveis de classe)*/
    protected static $tableName = '';
    protected static $columns = [];

    //variavel que pertence a cada instancia criada
    protected $values = [];

    function __construct($arr){
        // echo 'ok<br>';
        $this->loadFromArray($arr);
    }

    public function loadFromArray($arr){
        if($arr)
        {
            foreach ($arr as $key => $value){
                //$this->set($key, $value);
                $this->$key = $value;
            }
        }
    }
    //-- metodos internos (magicos)
    public function __get($key){
        return $this->values[$key];
    }
    public function __set($key, $value){
        $this->values[$key] = $value;
    }

    public static function get($filters = [], $columns ='*'){
        $objects = [];
        $result = static::getResultSetFromSelect($filters, $columns);

        if($result){
            $class = get_called_class();//obtem o nome da classe que chamou o metodo
            array_push($objects, new $class($row));

        }
        //retorna um array de objetos
        return $objects;
    }

    public static function getResultSetFromSelect($filters=[], $columns ='*'){
        $sql = "SELECT {$columns} FROM "
            . static::$tableName 
            . static::getFilters($filters);

        $result = Database::getResultFromQuery($sql);
        
        if($result->num_rows === 0){
            return null;
        }else{
            return $result;
        }
    }

    private static function getFilters($filters){
        $sql = '';
        if(count($filters) > 0){
            $sql .= " WHERE 1 = 1";
            foreach($filters as $column => $value):
                $sql .= " AND ${column} = " . static::getFormatedValue(${value});
            endforeach;
        }
        return $sql;

    }

    private static function getFormatedValue($value){
        if(is_null($value)){
            return "null";
        }elseif(gettype($value) ==='string'){
            return "'${value}'";
           
        }else{
            return "$value";
        }
    }
}
<?php

namespace App\Db;

use \PDO;
use \PDOException;

class Database{
    /**
     * @var string
     */
    const HOST= 'localhost';
/**
 * @var string
 */
    const NAME = 'produtos';

    /**
 * @var string
 */
    const USER = 'root';

    
    /**
 * @var string
 */
const PASS = 'root';

    /**
 * @var string
 */
private $table;

    /**
 * @var PDO
 */
private $connection;


    /**
 * @param string $table
 */
public function __construct($table = null){

$this->table = $table;

$this->setConnection();

}

private function setConnection(){
    try{
        $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
    $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die('ERROR : '.$e->getMessage());

    }

}   
/**
 * @param string $query
 * @param array $params
 * @return PDOStatement
 */
public function execute($query,$params =[]){
    try{
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;
    }catch(PDOException $e){
        die('ERROR : '.$e->getMessage());

    }
}


/**
 * @param array $values [field=>value]
 * @return integer
 * 
 */
public function insert($values){

    $fields = array_keys($values);
    $binds = array_pad([],count($fields),'?');
    

    $query = 'INSERT INTO '.$this->table .' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')'; 
    
    $this->execute($query,array_values($values));

    return $this->connection->lastInsertId();
    echo "<pre>"; print_r($query); echo "</pre>"; exit;


}
}



<?php

namespace App\Entity;

use App\Db\Database;
use \PDO;

Class Produto{

    /**
     * Id
     * @var integer
     */
    public $id;


    /**
     * name
     * @var string
     */
    public $nome;

        /**
     * description
     * @var string
     */
    public $descricao;

        /**
     * Quantity
     * @var integer
     */
    public $quantidade;


   /**
     * Register new produto
     * @return boolean
     */
    public function register(){
        $obDatabase = new Database('produtos');

        $this->id = $obDatabase->insert([
            'nome' =>$this->nome,
            'descricao' =>$this->descricao,
            'quantidade' =>$this->quantidade
        ]);

        return true;

        
        
        echo "<pre>"; print_r($obDatabase); echo "</pre>"; exit;
    }


    /**
     * @param string $where
     * @param string $order
     * @param string $limit
     * @return array
     */
    public static function getProdutos($where = null , $order = null, $limit = null){
            return (new Database('produtos'))->select($where,$order,$limit)
            ->fetchAll(PDO::FETCH_CLASS,self::class);


    }

}
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


     /**
     * @param integer $id
     * @return produto
     */
    public static function getProduto($id){
        return (new Database('produtos'))->select('id = '.$id)
        ->fetchObject(self::class);
    }

    /**
     * @return boolean
     */
    public function update(){
        return (new Database('produtos'))->update('id = '.$this->id,[
            'nome' =>$this->nome,
            'descricao' =>$this->descricao,
            'quantidade' =>$this->quantidade

        ]);
    }

}
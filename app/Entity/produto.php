<?php

namespace App\Entity;

use App\Db\Database;

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

}
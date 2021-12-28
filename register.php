<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE', 'Cadastrar Produto');
define('BTT', 'Cadastrar');

use \App\Entity\produto;

$obproduto = new produto;

//VALIDATION
if(isset($_POST['nome'],$_POST['descricao'],$_POST['quantidade'])){
    $obproduto->nome = $_POST['nome'];
    $obproduto->descricao = $_POST['descricao'];
    $obproduto->quantidade = $_POST['quantidade'];
    $obproduto->register();
    
    header('location: index.php?status=success');
    exit;

}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form.php';
include __DIR__.'/includes/footer.php';
<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE', 'Editar Produto');

use \App\Entity\produto;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?error');
    exit;
}

$obproduto = produto::getProduto($_GET['id']);
if(!$obproduto instanceof produto){
    header('location: index.php?error');
    exit;   
}

//VALIDATION
if(isset($_POST['nome'],$_POST['descricao'],$_POST['quantidade'])){

    $obproduto->nome = $_POST['nome'];
    $obproduto->descricao = $_POST['descricao'];
    $obproduto->quantidade = $_POST['quantidade'];
    $obproduto->update();
    
    header('location: index.php?status=success');
    exit;

}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form.php';
include __DIR__.'/includes/footer.php';
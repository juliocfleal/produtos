<?php

require __DIR__.'/vendor/autoload.php';

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
if(isset($_POST['delete'])){
$obproduto->excluir();  
    header('location: index.php?status=success');
    exit;

}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirm.php';
include __DIR__.'/includes/footer.php';
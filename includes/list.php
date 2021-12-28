<?php

$mensagem ='';

if(isset($_GET['status'])){
  switch($_GET['status']){
    case 'success':
      $mensagem = '<div class="alert alert-success">Realizado com Sucesso!</div>';
      break;
      case 'error':
        $mensagem = '<div class="alert alert-danger">Não executada!</div>';
        break;
  }
}

$resultados = '';
foreach($produtos as $produto){
    $resultados .= '<tr>
    <td>'.$produto->id.'</td>
    <td>'.$produto->nome.'</td>
    <td>'.$produto->descricao.'</td>
    <td>'.$produto->quantidade.'</td>
    <td>
    <a href="edit.php?id='.$produto->id.'">
    <button type="button" class="btn btn-primary">EDITAR</button></a><a href="delete.php?id='.$produto->id.'"><button type="button" class="btn btn-danger">DELETAR</button></a>
    </td>
    <tr>';
}
?>
<main>
 <?=$mensagem?>
<section>
    <a href="register.php">
        <button class="btn btn-success">Novo Produto</button>
    </a>
</section>
<section>
<table class="table text-light border border-light mt-4">
    <thead>
        <tr>
            <th>
              ID  
            </th>
            <th>
              NOME  
            </th>
            <th>
              DESCRIÇÃO
            </th>
            <th>
              QUANTIDADE
            </th>
            <th>
              AÇÕES
            </th>
        </tr>
    </thead>
    <tbody>
        <?=$resultados?>
    </tbody>
</table>
</section>
</main>
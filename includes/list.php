<?php
$resultados = '';
foreach($produtos as $produto){
    $resultados .= '<tr>
    <td>'.$produto->id.'</td>
    <td>'.$produto->nome.'</td>
    <td>'.$produto->descricao.'</td>
    <td>'.$produto->quantidade.'</td>
    <td></td>
    <tr>';
}
?>
<main>

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
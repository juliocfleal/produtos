<main>

<section>
    <a href="index.php">
        <button class="btn btn-success">Voltar</button>
    </a>
</section>

<h2 class="mt-2"><?=TITLE?></h2>

<form method="POST">
<div class="form-group">
<label>Nome</label>
<input type="text" class="form-control" name="nome" value="<?=$obproduto->nome?>">
</div>

<label>Descrição</label>
<textarea class="form-control" name="descricao"><?=$obproduto->descricao?></textarea>

<label>Quantidade</label>
<input type="number" class="form-control" name="quantidade" value="<?=$obproduto->quantidade?>">
<div class="form-group mt-3">
    <button type="submit" class="btn btn-success"><?=BTT?></button>

</div>

</div>
</div>

</form>

</main>
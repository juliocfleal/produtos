<main>



<h2 class="mt-2">Excluir Vaga</h2>

<form method="POST">
<div class="form-group">
    <p>Voce deseja realmente excluir o produto <strong><?=$obproduto->nome?></strong></p>
</div>

<section>
    <button type="submit" name="delete" class="btn btn-danger">Excluir</button>
    <a href="index.php">
        <button type="button" class="btn btn-success">Cancelar</button>
    </a>
</section>



</div>
</div>

</form>

</main>
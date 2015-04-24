<?php $this->render('header') ?>
<form action="" method="post">
    <h3>Alterar Cor</h3>
    <p>
        <label for="nome">Nome</label>
        <input type="text" name="nome" value="<?php echo $cor->nome ?>" class="form-control" />
    </p>
    <p class="text-center">
        <input type="submit" class="btn btn-success" />
        <a href="<?php echo URL ?>cor" class="btn btn-default">Voltar</a>
    </p>
</form>
<?php $this->render('footer') ?>

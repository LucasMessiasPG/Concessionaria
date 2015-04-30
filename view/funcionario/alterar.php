<?php $this->render('header') ?>
<form action="" method="post">
    <h3>Alterar Vendedor</h3>
    <p>
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" value="<?php echo $vendedor->nome ?>">
    </p>
    <p class="text-center">
        <input type="submit" class="btn btn-success" />
        <a href="<?php echo URL ?>cor" class="btn btn-default">Voltar</a>
    </p>
</form>
<?php $this->render('footer') ?>

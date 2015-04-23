<?php $this->render('header') ?>
<form action="" method="post">
    <h3>Cadastro de Marca</h3>
    <p>
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" />
    </p>
    <p class="text-center">
        <input type="submit" class="btn btn-success" />
        <a href="<?php echo URL ?>marca" class="btn btn-default">Voltar</a>
    </p>
</form>
<?php $this->render('footer') ?>

<?php $this->render('header') ?>
<form action="" method="post">
    <h3>Alterar Modelo</h3>
    <p>
        <label for="nome">Modelo</label>
        <input type="text" name="nome" class="form-control" placeholder="<?php echo strtoupper($modelo->nome) ?>" value="<?php echo strtoupper($modelo->nome) ?>"/>
    </p>
    <p class="text-center">
        <input type="submit" class="btn btn-success" />
        <a href="<?php echo URL ?>marca/listar" class="btn btn-default">Voltar</a>
    </p>
</form>
<?php $this->render('footer') ?>

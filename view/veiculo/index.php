<?php $this->render('header') ?>
<div class="container">
    <h3>Concessionária - Veículos</h3>
    <div class="text-center">
        <a href="<?php echo URL.'veiculo/cadastrar'?>" class="btn btn-default">Cadastrar</a>
        <a href="<?php echo URL.'veiculo/listar'?>" class="btn btn-default">Listar</a>
        <a href="<?php echo URL?>" class="btn btn-default">Inicio</a>
    </div>
</div>
<?php $this->render('footer') ?>

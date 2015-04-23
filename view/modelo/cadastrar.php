<?php $this->render('header') ?>
<?php if(count($marcas) > 0): ?>
<form action="" method="post">
    <h3>Cadastro de Modelo</h3>
    <div>
       <label>Marca</label>
        <select class="form-control" name="marca">
            <?php foreach($marcas as $marca): ?>
            <option value="<?php echo $marca->id_marca ?>"><?php echo ucwords($marca->nome) ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" />
    </div>
    <div class="text-center">
        <input type="submit" class="btn btn-success" />
        <a href="<?php echo URL ?>modelo" class="btn btn-default">Voltar</a>
    </div>
</form>
<?php else: ?>
<div class="alert alert-success text-center">
    Precisar exister pelo menos 1 modelo, cor para cadastrar um veículo
    <a href="<?php echo URL ?>veiculo">Voltar</a>
</div>
<?php endif; ?>
<?php $this->render('footer') ?>

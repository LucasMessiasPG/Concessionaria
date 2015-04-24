<?php $this->render('header') ?>
<form action="" method="post">
    <h3>Alterar Modelo</h3>
    <p>
        <label>Marca</label>
        <select class="form-control" name="marca">
            <?php foreach($marcas as $marca): ?>
                <option value="<?php echo $marca->id_marca ?>" <?php if($modeloAtual->id_marca == $marca->id_marca): ?>SELECTED <?php endif; ?> ><?php echo ucwords($marca->nome) ?></option>
            <?php endforeach ?>
        </select>
        <label for="nome">Modelo</label>
        <input type="text" name="nome" class="form-control" placeholder="<?php echo strtoupper($modeloAtual->nome) ?>" value="<?php echo strtoupper($modeloAtual->nome) ?>"/>
    </p>
    <p class="text-center">
        <input type="submit" class="btn btn-success" value="Alterar" />
        <a href="<?php echo URL ?>marca/listar" class="btn btn-default">Voltar</a>
    </p>
</form>
<?php $this->render('footer') ?>

<?php $this->render('header') ?>
<?php if(count($modelos) > 0 || count($cores) > 0): ?>
<form action="" method="post" class="form-horizontal">
    <h3>Cadastro de Veículo</h3>
    <div>
        <label for="marca">Marca</label>
        <select id="marca" class="form-control" name="id_marca">
            <option value="">Selecione</option>
            <?php foreach($marcas as $marca): ?>
            <option value="<?php echo $marca->id_marca ?>"><?php echo ucwords($marca->nome) ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        <label for="nome">Modelo</label>
        <select class="form-control" name="id_modelo">
            <?php foreach($modelos as $modelo): ?>
            <option value="<?php echo $modelo->id_modelo ?>"<?php if($veiculoAtual->id_modelo==$modelo->id_modelo): ?> selected<?php endif; ?>><?php echo ucwords($modelo->nome) ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        <label for="nome">Cor</label>
        <select class="form-control" name="id_cor">
            <?php foreach($cores as $cor): ?>
            <option value="<?php echo $cor->id_cor ?>"<?php if($veiculoAtual->id_cor==$cor->id_cor): ?> selected<?php endif; ?>><?php echo ucwords($cor->nome) ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        <label for="nome">Placa</label>
        <input type="text" name="placa" value="<?php echo $veiculoAtual->placa ?>" class="form-control" />
    </div>
    <div>
        <label for="nome">Ano Fabricação</label>
        <select class="form-control" name="ano_fabricacao">
            <?php foreach($anos as $ano): ?>
            <option value="<?php echo $ano ?>"<?php if($veiculoAtual->ano_fabricacao==$ano): ?> selected<?php endif; ?>><?php echo $ano ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        <label for="nome">Ano Modelo</label>
        <select class="form-control" name="ano_modelo">
            <?php foreach($anos as $ano): ?>
            <option value="<?php echo $ano ?>"<?php if($veiculoAtual->ano_modelo==$ano): ?> selected<?php endif; ?>><?php echo $ano ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        <label for="nome">Preço</label>
        <div class="input-group">
            <span class="input-group-addon">R$</span>
            <input type="text" class="form-control" name="preco" value="<?php echo $veiculoAtual->preco ?>">
            <span class="input-group-addon">.00</span>
        </div>
    </div>

    <br />

    <div class="text-center">
        <input type="submit" class="btn btn-success" />
        <a href="<?php echo URL ?>veiculo" class="btn btn-default">Voltar</a>

        <div class="btn-group">
            <a href="<?php echo URL ?>modelo/cadastrar" class="btn btn-primary">Cadastrar Modelo</a>
            <a href="<?php echo URL ?>cor/cadastrar" class="btn btn-primary">Cadastrar Cor</a>
        </div>
    </div>
</form>
<?php $this->render('veiculo/script') ?>
<?php else: ?>
<div class="alert alert-success text-center">
    Precisar exister pelo menos 1 modelo, cor para cadastrar um veículo
    <a href="<?php echo URL ?>veiculo">Voltar</a>
</div>
<?php endif; ?>
<?php $this->render('footer') ?>

<?php $this->render('header') ?>
<div class="container">
    <?php if(count($marcas) > 0 || count($cores) > 0): ?>
    <form action="" method="post">
        <h3>Cadastro de Veículo</h3>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" />
        </div>
        <div>
            <select class="btn" name="id_modelo">
                <?php foreach($marcas as $marca): ?>
                <option value="<?php echo $marca->id_marca ?>"><?php echo $marca->nome ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <select class="btn" name="id_cor">
                <?php foreach($cores as $cor): ?>
                <option value="<?php echo $cor->id_cor ?>"><?php echo $marca->nome ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="nome">Placa</label>
            <input type="text" name="id_placa" class="form-control" />
        </div>
        <div>
            <label for="nome">Fabricação</label>
            <input type="text" name="ano_fabricacao" class="form-control" />
        </div>
        <div>
            <label for="nome">Ano</label>
            <input type="text" name="ano_modelo" class="form-control" />
        </div>
        <div>
            <label for="nome">Preço</label>
            <div class="input-group">
                <span class="input-group-addon">R$</span>
                <input type="text" class="form-control" name="preco">
                <span class="input-group-addon">.00</span>
            </div>
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-success" />
            <a href="<?php echo URL ?>veiculo" class="btn btn-default">Voltar</a>
        </div>
    </form>
    <?php else: ?>
    <div class="alert alert-success text-center">
        Precisar exister pelo menos 1 modelo, cor para cadastrar um veículo
        <a href="<?php echo URL ?>veiculo">Voltar</a>
    </div>
    <?php endif; ?>
</div>

<?php $this->render('footer') ?>

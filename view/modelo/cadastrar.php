<?php $this->render('header') ?>
<div class="container">
    <form action="" method="post">
        <h3>Cadastro de Modelo</h3>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" />
        </div>
        <div class="text-center">
            <select class="btn" name="marca">
                <?php foreach($marcas as $marca): ?>
                <option value="<?php echo $marca->id_marca ?>"><?php echo $marca->nome ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-success" />
            <a href="<?php echo URL ?>modelo" class="btn btn-default">Voltar</a>
        </div>
    </form>
</div>

<?php $this->render('footer') ?>

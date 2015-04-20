<?php $this->render('header')?>
<h3>Cadastrar - Modelo</h3>
<form action="" method="post">
    <label>Marca:</label>
    <select name=    "marca">
        <option value="">Selecione</option>
        <?php
        for($i=0; $i<count($parametros); $i++){
        ?>
        <option value="<?php echo $$i->id_marca?>"><?php echo ucfirst($$i->nome)?></option>
        <?php
        }
        ?>
    </select>
    <label>Modelo:</label>
    <input type="text" name="nome" />
    <input type="submit" />
</form>
<a href="http://localhost/concessionaria/?url=marca/cadastrar">Cadastrar Marca</a>

<?php $this->render('footer') ?>
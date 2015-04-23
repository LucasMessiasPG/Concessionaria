<?php $this->render('header') ?>
<h3>Alterar</h3>
<form action="" method="POST">
    <select name="marca">
        <option value="">Selecione</option>
        <?php
        for ($i = 0; $i < count($parametros); $i++) {
        ?>
            <option value="<?php echo $$i->id_marca ;?>"><?php echo $$i->nome ;?></option>"
        <?php
        }
        ?>
    </select>
    <input type="text" name="nome">
    <input type="submit">
</form>
<?php $this->render('footer') ?>
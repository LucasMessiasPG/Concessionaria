<?php $this->render('header') ?>
<form action="" method="POST">
    <select>
        <option value="">Selecione</option>
        <?php
        for ($i = 0; $i < count($this->marca->id_marca); $i++) {
            echo "<option value='$this->marca->id_marca'".$this->marca->nome."</option>";
        }?>
    </select>
    <input type="text" name="nome">
    <input type="submit">
</form>
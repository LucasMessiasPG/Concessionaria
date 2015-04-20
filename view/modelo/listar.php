<?php $this->render('header');
for($i=0;$i<count($parametros);$i++){
    $sql = "SELECT nome FROM marca WHERE id_marca=". $$i->id_marca;
    $marca = pg_fetch_object(pg_query($sql));
?>
    <p><?php echo $$i->id_modelo." - ". $marca->nome." ".$$i->nome?></p>
<?php
 }
    //$this->view->render('footer') ?>

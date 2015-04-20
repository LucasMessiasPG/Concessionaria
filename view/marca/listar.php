<?php $this->render('header');
for($i=0;$i<count($parametros);$i++){
?>
    <p><?php echo $$i->id_marca." - ".$$i->nome ?></p>
<?php
 }
    //$this->view->render('footer') ?>

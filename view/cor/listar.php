<?php $this->render('header');
for($i=0;$i<count($parametros);$i++){
?>
    <p><?php echo $$i->id_cor." - ".$$i->nome ?></p>
<?php
 }
$this->render('footer') ?>

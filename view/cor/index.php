<?php $this->render('header'); 
$url = "window.location.href='http://localhost/concessionaria/?url=cor/";
?>

<button onclick="<?php echo $url.'cadastrar'?>'">Cadastrar</button>
<button onclick="<?php echo $url.'alterar'?>'">Alterar</button>
<button onclick="<?php echo $url.'listar'?>'">Listar</button>
<?php $this->render('footer') ?>
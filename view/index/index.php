<?php $this->render('header'); 
$url = "window.location.href='http://localhost/concessionaria/";
?>

<button onclick="<?php echo $url.'?url=marca'?>'">Marca</button>
<button onclick="<?php echo $url.'?url=modelo'?>'">Modelo</button>
<button onclick="<?php echo $url.'?url=cor'?>'">Cor</button>
<button onclick="<?php echo $url.'?url=veiculo'?>'">Veiculo</button>


<?php $this->render('footer') ?>
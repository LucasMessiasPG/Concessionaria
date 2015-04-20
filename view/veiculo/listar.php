<?php $this->render('header');
echo "<table>";
for($i=0;$i<count($parametros);$i++){
    $sql = "SELECT id_marca,nome FROM modelo WHERE id_modelo=". $$i->id_modelo;
    $modelo = pg_fetch_object(pg_query($sql));
    
    $sql = "SELECT nome FROM cor WHERE id_cor=". $$i->id_cor;
    $cor = pg_fetch_object(pg_query($sql));

    $sql = "SELECT nome FROM marca WHERE id_marca=". $modelo->id_marca;
    $marca = pg_fetch_object(pg_query($sql));
    
?>   
    <tr>
        <td><p><?php echo $$i->id_veiculo?></p></td>
        <td><p><?php echo  $marca->nome.' '.$modelo->nome?></p></td>
        <td><p><?php echo $$i->placa?></p></td>
        <td><p><?php echo $$i->ano_fabricacao?></p></td>
        <td><p><?php echo $$i->ano_modelo?></p></td>
        <td><p><?php echo $$i->preco?></p></td>
    </tr>
<?php
 }
echo "</table>";
$this->render('footer') ?>
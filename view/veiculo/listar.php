<?php $this->render('header') ?>
<?php if(count($veiculos) > 0): ?>
<h3>Lista de Veículos</h3>
<table class="table">
    <thead>
        <th>ID</th>
        <th>Modelo</th>
        <th>Placa</th>
        <th>Ano Fabricação</th>
        <th>Ano Modelo</th>
        <th>Preço</th>
    </thead>
    <tbody>
        <?php foreach ($veiculos as $veiculo): ?>
        <tr>
            <td><?php echo $veiculo->id_veiculo ?></td>
            <td><?php echo $veiculo->modelo ?></td>
            <td><?php echo $veiculo->placa ?></td>
            <td><?php echo $veiculo->ano_fabricacao ?></td>
            <td><?php echo $veiculo->ano_modelo ?></td>
            <td><?php echo $veiculo->preco ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php else: ?>
<h3>Nenhum veiculo dadastrado</h3>
<?php endif; ?>
<div class="text-center">
    <a href="<?php echo URL?>veiculo/cadastrar" class="btn btn-default">Cadastrar</a>
    <a href="<?php echo URL?>veiculo" class="btn btn-default">Voltar</a>
</div>
<?php $this->render('footer') ?>

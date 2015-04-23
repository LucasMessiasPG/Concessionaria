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
        <th width="150px">Ações</th>
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
            <td>
                <a href="<?php echo URL ?>veiculo/alterar/<?php echo $veiculo->id_veiculo ?>">
                    <i class="glyphicon glyphicon-edit"></i> Alterar
                </a>
                <a href="<?php echo URL ?>veiculo/excluir/<?php echo $veiculo->id_veiculo ?>">
                    <i class="glyphicon glyphicon-remove-circle"></i> Excluir
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php else: ?>
<h3>Nenhum veículo dadastrado</h3>
<?php endif; ?>
<div class="text-center">
    <a href="<?php echo URL?>veiculo/cadastrar" class="btn btn-default">Cadastrar</a>
    <a href="<?php echo URL?>veiculo" class="btn btn-default">Voltar</a>
</div>
<?php $this->render('footer') ?>

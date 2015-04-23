<?php $this->render('header') ?>
<div class="container">
    <?php if(count($veiculos) > 0): ?>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Placa</th>
            <th>Ano</th>
            <th>Modelo</th>
            <th>Preço</th>
        </thead>
        <tbody>
            <?php foreach ($veiculos as $veiculo): ?>
            <td><?php echo $veiculo->id_cor ?></td>
            <td><?php echo $veiculo->nome ?></td>
            <td><?php echo $veiculo->placa ?></td>
            <td><?php echo $veiculo->ano ?></td>
            <td><?php echo $veiculo->modelo ?></td>
            <td><?php echo $veiculo->preco ?></td>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
    <h3>Nenhum veiculo dadastrado</h3>
    <?php endif; ?>
    <div class="text-center">
        <a href="<?php echo URL?>?url=veiculo/cadastrar" class="btn btn-default">Cadastrar</a>
        <a href="<?php echo URL?>" class="btn btn-default">Inicio</a>
    </div>
</div>
<?php $this->render('footer') ?>

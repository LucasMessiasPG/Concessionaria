<?php $this->render('header') ?>
<?php if(count($cores) > 0): ?>
<h3>Lista de Cores</h3>
<table class="table">
    <thead>
        <th>ID</th>
        <th>Nome</th>
    </thead>
    <tbody>
        <?php foreach ($cores as $cor): ?>
        <tr>
            <td><?php echo $cor->id_cor ?></td>
            <td><?php echo $cor->nome ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php else: ?>
<h3>Nenhuma cor dadastrada</h3>
<?php endif; ?>
<div class="text-center">
    <a href="<?php echo URL?>cor/cadastrar" class="btn btn-default">Cadastrar</a>
    <a href="<?php echo URL?>cor" class="btn btn-default">Voltar</a>
</div>
<?php $this->render('footer') ?>

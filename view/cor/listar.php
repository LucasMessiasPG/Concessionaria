<?php $this->render('header') ?>
<?php if(count($cores) > 0): ?>
<h3>Lista de Cores</h3>
<table class="table">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th width="150px">Ações</th>
    </thead>
    <tbody>
        <?php foreach ($cores as $cor): ?>
        <tr>
            <td><?php echo $cor->id_cor ?></td>
            <td><?php echo $cor->nome ?></td>
            <td>
                <a href="<?php echo URL ?>cor/alterar/<?php echo $cor->id_cor ?>">
                    <i class="glyphicon glyphicon-edit"></i> Alterar
                </a>
                <a class="confirmar" href="<?php echo URL ?>cor/excluir/<?php echo $cor->id_cor ?>">
                    <i class="glyphicon glyphicon-remove-circle confirm"></i> Excluir
                </a>
            </td>
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

<?php $this->render('header') ?>
<?php if(count($marcas) > 0): ?>
<h3>Lista de Marcas</h3>
<table class="table">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th width="150px">Ações</th>
    </thead>
    <tbody>
        <?php foreach ($marcas as $marca): ?>
        <tr>
            <td><?php echo $marca->id_marca ?></td>
            <td><?php echo ucwords($marca->nome) ?></td>
            <td>
                <a href="<?php echo URL ?>marca/alterar/<?php echo $marca->id_marca ?>">
                    <i class="glyphicon glyphicon-edit"></i> Alterar
                </a>
                <a href="<?php echo URL ?>marca/excluir/<?php echo $marca->id_marca ?>">
                    <i class="glyphicon glyphicon-remove-circle"></i> Excluir
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php else: ?>
<h3>Nenhuma marca dadastrada</h3>
<?php endif; ?>
<div class="text-center">
    <a href="<?php echo URL?>marca/cadastrar" class="btn btn-default">Cadastrar</a>
    <a href="<?php echo URL?>" class="btn btn-default">Inicio</a>
</div>
<?php $this->render('footer') ?>

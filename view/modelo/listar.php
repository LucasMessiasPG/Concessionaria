<?php $this->render('header') ?>
<div class="container">
    <?php if(count($modelos) > 0): ?>
    <h3>Lista de Modelos</h3>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Marca</th>
            <th>Nome</th>
            <th width="150px">Ações</th>
        </thead>
        <tbody>
            <?php foreach ($modelos as $modelo): ?>
            <tr>
                <td><?php echo $modelo->id_modelo ?></td>
                <td><?php echo ucwords($modelo->marca) ?></td>
                <td><?php echo ucwords($modelo->nome) ?></td>
                <td>
                    <a href="<?php echo URL ?>modelo/alterar/<?php echo $modelo->id_modelo ?>">
                        <i class="glyphicon glyphicon-edit"></i> Alterar
                    </a>
                    <a href="<?php echo URL ?>modelo/excluir/<?php echo $modelo->id_modelo ?>">
                        <i class="glyphicon glyphicon-remove-circle"></i> Excluir
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
    <h3>Nenhum modelo dadastrado</h3>
    <?php endif; print_r($modelo); ?>
    <div class="text-center">
        <a href="<?php echo URL?>modelo/cadastrar" class="btn btn-default">Cadastrar</a>
        <a href="<?php echo URL?>" class="btn btn-default">Inicio</a>
    </div>
</div>
<?php $this->render('footer') ?>

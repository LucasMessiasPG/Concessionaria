<?php $this->render('header') ?>
<div class="container">
    <?php if(count($modelos) > 0): ?>
    <h3>Lista de Modelos</h3>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Nome</th>
        </thead>
        <tbody>
            <?php foreach ($modelos as $modelo): ?>
            <tr>
                <td><?php echo $modelo->id_modelo ?></td>
                <td><?php echo $modelo->nome ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
    <h3>Nenhum modelo dadastrado</h3>
    <?php endif; ?>
    <div class="text-center">
        <a href="<?php echo URL?>modelo/cadastrar" class="btn btn-default">Cadastrar</a>
        <a href="<?php echo URL?>" class="btn btn-default">Inicio</a>
    </div>
</div>
<?php $this->render('footer') ?>

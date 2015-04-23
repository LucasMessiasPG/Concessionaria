<?php $this->render('header') ?>
<div class="container">
    <?php if(count($marcas) > 0): ?>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Nome</th>
        </thead>
        <tbody>
            <?php foreach ($marcas as $marca): ?>
            <td><?php echo $marca->id_marca ?></td>
            <td><?php echo $marca->nome ?></td>
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
</div>
<?php $this->render('footer') ?>

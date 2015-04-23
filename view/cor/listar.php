<?php $this->render('header') ?>
<div class="container">
    <?php if(count($cores) > 0): ?>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Nome</th>
        </thead>
        <tbody>
            <?php foreach ($cores as $cor): ?>
            <td><?php echo $cor->id_cor ?></td>
            <td><?php echo $cor->nome ?></td>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
    <h3>Nenhuma cor dadastrada</h3>
    <?php endif; ?>
    <div class="text-center">
        <a href="<?php echo URL?>?url=cor/cadastrar" class="btn btn-default">Cadastrar</a>
        <a href="<?php echo URL?>" class="btn btn-default">Inicio</a>
    </div>
</div>
<?php $this->render('footer') ?>

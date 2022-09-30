<?php include "header.php"?>

<div class="container">
    <div class="jumbotron">
        <h1>Listar cursos</h1>
    </div>
    <a href="./novo-curso" class="btn btn-primary mb-4">Novo Curso</a>
    <ul class="list-group">
        <?php foreach ($cursos as $curso): ?>
            <li class="list-group-item">
                <?= $curso->getDescricao(); ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<?php include "footer.php"?>
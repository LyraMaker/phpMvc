<?php include "header.php"?>

<div class="container">
    <div class="jumbotron">
        <h1>Listar cursos</h1>
    </div>
    <a href="./novo-curso" class="btn btn-primary mb-4">Novo Curso</a>
    <ul class="list-group">
        <?php foreach ($cursos as $curso): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span><?= $curso->getDescricao(); ?></span>
                <span>
                <a class="btn-sm font-weight-bold btn-primary mr-1 text-light" href="editar-curso?id=<?= $curso->getId()?>">Editar</a>
                <a class="btn-sm font-weight-bold btn-danger mr-1 text-light" href="excluir-curso?id=<?= $curso->getId()?>">Excluir</a>
                </span>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<?php include "footer.php"?>
<?php include "header.php"?>

<div class="container">
    <div class="jumbotron">
        <h1>Editar curso</h1>
    </div>
    <form action="./salvar-curso" method="post">
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" id="descricao" name="descricao" class="form-control" value="<?= $curso->getDescricao();?>">
        </div>
        <button class="btn btn-info">Atualizar</button>
    </form>
</div>

<?php include "footer.php"?>
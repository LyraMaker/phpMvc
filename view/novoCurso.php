<?php include "header.php"?>

<div class="container">
    <div class="jumbotron">
        <h1>Cadastrar novo curso</h1>
    </div>
    <form action="./salvar-curso" method="post">
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" id="descricao" name="descricao" class="form-control">
        </div>
        <button class="btn btn-primary">Salvar</button>
    </form>
</div>

<?php include "footer.php"?>
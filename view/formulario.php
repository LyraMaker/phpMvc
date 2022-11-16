<?php

use  Alura\Cursos\Misc\FuncoesPagina;
include "header.php";
    
?>

<div class="container">
    <div class="jumbotron">
        <h1><strong><?= FuncoesPagina::nomePagina($funcaoPagina,$extra);?></strong></h1>
    </div>
    <form action="./salvar-curso<?= isset($curso)?'?id='.$curso->getId():'' ?>" method="post">
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" id="descricao" name="descricao" class="form-control" value="<?= isset($curso)? $curso->getDescricao():''?>">
        </div>
        <button class="btn btn-info">Salvar</button>
    </form>
</div>

<?php include "footer.php"?>
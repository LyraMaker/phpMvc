<?php include "header.php" ?>

<section class="bg-dark">
    <div class="d-flex justify-content-center  align-items-center" style="height: 100vh;">
        <div class="p-2 pb-4 bg-white rounded-sm">
            <form action="" method="post">
                <div class="group-form m-3">
                    <label for="nomeUsuario">Nome do usuário</label>
                    <input class="form-control" type="text" name="nomeUsuario" id="nomeUsuario" required>
                </div>
                <div class="group-form m-3">
                    <label for="senhausuario">Senha:</label>
                    <input class="form-control" type="password" name="senhausuario" id="senhausuario" required>
                </div>
                <div class="d-flex justify-content-around"> <a class="btn btn-sm btn-primary" href="http://">Acessar</a>
                    <a class="btn btn-sm btn-warning" href="http://">Limpar</a></div>
            </form>
        </div>
    </div>
</section>

<?php include "footer.php" ?>
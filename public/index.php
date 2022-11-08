<?php
require '../vendor/autoload.php';

use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\NovoCurso;
use Alura\Cursos\Controller\Persistencia;
use Alura\Cursos\Controller\Interfaces\InterfaceRequisicao;

$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../config/routes.php';

if (! array_key_exists($caminho, $rotas)) {
    echo "ERRO 4040!";
    exit();
}

$classeController = $rotas[$caminho];
/** @var InterfaceRequisicao $controller */
$controller = new $classeController();
$controller->processaRequisicao();

?>
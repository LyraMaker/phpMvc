<?php 
require '../vendor/autoload.php';

use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\NovoCurso;

switch ($_SERVER['PATH_INFO']){
    case '/listar-cursos':
       $requestListaCurso = new ListarCursos();
       $requestListaCurso->processaRequisicao();
        break;
    case '/novo-curso':
        $requestNovoCurso = new NovoCurso();
        $requestNovoCurso->processaRequisicao();
        break;
    default:
        echo "Opção Inválida";
            
}

?>
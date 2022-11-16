<?php
namespace Alura\Cursos\Controller;

use Alura\Cursos\Controller\Interfaces\InterfaceRequisicao;
use Alura\Cursos\Infra\EntityManagerCreator;
use Alura\Cursos\Entity\Curso;

class EditarCurso implements InterfaceRequisicao{
    private $repositorioCursos;
    
    public function __construct(){
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioCursos = $entityManager->getRepository(Curso::class);
    }
    public function processaRequisicao()
    {
            
        $curso = $this->repositorioCursos->find($_GET['id']);
        $funcaoPagina = "Editar registro";
        $extra = $curso->getDescricao();
        require __DIR__."/../../view/formulario.php";
    }

    
}
?>
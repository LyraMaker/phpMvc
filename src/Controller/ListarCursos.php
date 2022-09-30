<?php 

namespace  Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;
use Alura\Cursos\Controller\Interfaces\InterfaceRequisicao;

class ListarCursos implements InterfaceRequisicao{
    private $repositorioCursos;
    
    public function __construct(){
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioCursos = $entityManager->getRepository(Curso::class);
    }
    
    public function processaRequisicao(){
        
        $cursos = $this->repositorioCursos->findAll();
        require __DIR__."/../../view/listaCurso.php";
    }
}
?>
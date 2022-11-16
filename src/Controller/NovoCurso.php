<?php 

namespace Alura\Cursos\Controller;

use Alura\Cursos\Infra\EntityManagerCreator;
use Alura\Cursos\Controller\Interfaces\InterfaceRequisicao;
use Alura\Cursos\Entity\Curso;

class NovoCurso implements InterfaceRequisicao{
    private $repositorioCursos;
    function __construct() {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioCursos = $entityManager->getRepository(Curso::class);
    }
    public function processaRequisicao()
    {
        $funcaoPagina = "Novo registro";
        require __DIR__."/../../view/formulario.php";
  
    }

}
?>
<?php
namespace Alura\Cursos\Controller;

use Alura\Cursos\Controller\Interfaces\InterfaceRequisicao;
use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class ExcluirCurso implements InterfaceRequisicao
{

    private $repositorioCursos;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioCursos =  $entityManager;
    }

    public function processaRequisicao()
    {
        $curso = $this->repositorioCursos->getReference(Curso::class, $_GET['id']);
        $this->repositorioCursos->remove($curso);
        $this->repositorioCursos->flush();
        header("Location: ./listar-cursos");
        
    }
}
<?php
namespace Alura\Cursos\Controller;

use Alura\Cursos\Infra\EntityManagerCreator;
use Alura\Cursos\Controller\Interfaces\InterfaceRequisicao;
use Alura\Cursos\Entity\Curso;

class Persistencia implements InterfaceRequisicao
{

    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }

    public function processaRequisicao(): void
    {
        $descricao = $_POST['descricao'];
        var_dump($_POST);
        $curso = new Curso();
        $curso->setDescricao($descricao);
        $this->entityManager->persist($curso );
        $this->entityManager->flush();
        header("Location: ./listar-cursos");
    }
}
<?php
use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\NovoCurso;
use Alura\Cursos\Controller\Persistencia;
use Alura\Cursos\Controller\EditarCurso;
use Alura\Cursos\Controller\ExcluirCurso;

$rotas = [
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso' => NovoCurso::class,
    '/salvar-curso' => Persistencia::class,
    '/editar-curso' => EditarCurso::class,
    '/excluir-curso'=> ExcluirCurso::class
];

return $rotas;
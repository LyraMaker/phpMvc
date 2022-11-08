<?php
use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\NovoCurso;
use Alura\Cursos\Controller\Persistencia;

$rotas = [
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso' => NovoCurso::class,
    '/salvar-curso' => Persistencia::class
];

return $rotas;
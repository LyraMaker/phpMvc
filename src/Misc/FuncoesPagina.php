<?php
namespace Alura\Cursos\Misc;

class FuncoesPagina{

function nomePagina(string $funcaoPagina,?string $extra):string{
    if (!is_null($extra)){
        return "$funcaoPagina | $extra";
    }
    return $funcaoPagina;
}
}
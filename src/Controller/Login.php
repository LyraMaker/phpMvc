<?php
namespace Alura\Cursos\Controller;
use Alura\Cursos\Controller\Interfaces\InterfaceRequisicao;

class Login implements InterfaceRequisicao{

	public function processaRequisicao() {
        require __DIR__ . "/../../view/login.php";
	}
}
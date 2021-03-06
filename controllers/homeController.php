<?php

/**Controller referente ao uso da home */
class homeController extends controller
{

	public function __construct()
	{
		parent::__construct();

		$alunos = new alunosModels();

		if (!$alunos->isLogged()) {
			header("Location: " . BASE . "login");
		}
	}
	public function index()
	{
		$dados = array(
			'info' => [],
			'cursos' => []
		);
		$alunos = new alunosModels();
		$alunos->setALuno($_SESSION['lgaluno']);
		$dados['info'] = $alunos;

		$cursos = new CursoModels();
		// die(var_dump($cursos));
		$dados['cursos'] = $cursos->getCursosDoAluno($alunos->getId());
		// var_dump($dados);
		// exit;
		$this->loadTemplate('home', $dados);
	}
}

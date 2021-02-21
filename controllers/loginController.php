<?php

/**Controller referente ao uso do login */
class LoginController extends controller
{

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$array = array();
		try {
			if (isset($_POST['email']) && !empty($_POST['email'])) {
				$email = addslashes($_POST['email']);
				$senha = md5($_POST['senha']);
				$alunos = new alunosModels();
				if ($alunos->fazerLogin($email, $senha)) {
					header("Location:" . BASE);
				}
			}
			$this->loadView('login', $array);
		} catch (\Throwable $th) {
			echo "não foi possivel efetuar login" . $th->getMessage();
		}
	}
	/*funçao para deslogar da tela de usuários*/
	public function logout()
	{
		unset($_SESSION['lgaluno']);
		header("Location:" . BASE);
	}
}

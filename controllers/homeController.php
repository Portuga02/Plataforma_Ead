<?php

/**Controller referente ao uso da home */
class homeController extends controller
{

    public function __construct()
    {
        parent::__construct();

        $alunos  = new alunosModels();

        if (!$alunos->isLogged()) {
            header("Location: " . BASE . "login");
        }
    }
    public function index()
    {
        $dados = array();

        $this->loadTemplate('home', $dados);
    }
}

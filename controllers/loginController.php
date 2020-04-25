<?php

/**Controller referente ao uso do login */
class loginController extends controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $array = array();

        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $email = addslashes($_POST['email']);
            $senha = md5($_POST['senha']);
        }
        $this->loadTemplate('login', $array);
    }
}

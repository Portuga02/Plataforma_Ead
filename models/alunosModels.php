<?php
Class alunosModels extends model{

    /*FUNÇÃO VERIFICADORA DO LOGIN*/
    public function isLogged(){
        if(isset($_SESSION['lgaluno']) && !empty($_SESSION['lgaluno'])){
            return true;
        } else{
            return false;
        }

    }
}

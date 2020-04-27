<?php
class alunosModels extends model
{

    /*FUNÇÃO VERIFICADORA DO LOGIN*/
    public function isLogged()
    {
        if (isset($_SESSION['lgaluno']) && !empty($_SESSION['lgaluno'])) {
            return true;
        } else {
            return false;
        }
    }
    public function fazerLogin($email, $senha)
    {
        $QueryBanco = "SELECT * FROM alunos WHERE email = '$email' AND senha = '$senha'";
        $requisicao = $this->db->query($QueryBanco);

        if ($requisicao->rowCount() > 0) {
            $linha = $requisicao->fetch();
            $_SESSION['lgaluno'] = $linha['id'];
            return true;
        } else {
            return false;
        }
    }
}

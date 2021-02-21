<?php
class alunosModels extends model
{

	/*FUNÇÃO VERIFICADORA DO LOGIN*/
	public function isLogged()
	{
		try {
			if (isset($_SESSION['lgaluno']) && !empty($_SESSION['lgaluno'])) {
				return true;
			} else {
				return false;
			}
		} catch (\Throwable $th) {
			echo "Erro " . $th->getMessage();
		}
	}
	public function fazerLogin($email, $senha)
	{
		$QueryBanco = "SELECT * FROM alunos WHERE email = '$email' AND senha = '$senha'";

		try {
			$requisicao = $this->db->query($QueryBanco);
			if ($requisicao->rowCount() > 0) {
				$linha = $requisicao->fetch();
				$_SESSION['lgaluno'] = $linha['id'];
				return true;
			} else {
				return false;
			}
		} catch (\Throwable $th) {
			echo "Error ao fazer login" . $th->getMessage();
		}
	}
	/*utilziando para trazer o nome do aluno na view*/
	public function setAluno($id)
	{
		$sql = "SELECT * FROM alunos WHERE id = '$id'";

		try {
			$sql = $this->db->query($sql);
			if ($sql->rowCount() > 0) {
				$this->info = $sql->fetch();
			}
		} catch (\Throwable $th) {
			echo "Erro ao selecionar alunos" . $th->getMessage();
		}
	}

	public function getNome()
	{
		return $this->info['nome'];
	}
	public function getId()
	{
		return $this->info['id'];
	}
}

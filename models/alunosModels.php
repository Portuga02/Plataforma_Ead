<?php
class alunosModels extends model {

	/*FUNÇÃO VERIFICADORA DO LOGIN*/
	public function isLogged() {
		if (isset($_SESSION['lgaluno']) && !empty($_SESSION['lgaluno'])) {
			return true;
		} else {
			return false;
		}
	}
	public function fazerLogin($email, $senha) {
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
	/*utilziando para trazer o nome do aluno na view*/
	public function setAluno($id) {
		$sql = "SELECT * FROM alunos WHERE id = '$id'";
		$sql = $this->db->query($sql);
		if ($sql->rowCount() > 0) {
			$this->info = $sql->fetch();
		}
	}

	public function getNome() {
		return $this->info['nome'];
	}
	public function getId() {
		return $this->info['id'];
	}
}

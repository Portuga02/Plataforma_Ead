<?php

// model de cursos onde lista e busca os alunos matriculados nos respectivos cursos

class CursosModels extends model
{

	public function getCursosDoAluno($id)
	{
		$array = array();

		$sql = "SELECT
					aluno_curso.id_curso,
					curso.nome,
					curso.imagem,
					curso.descricao
				FROM
					aluno_curso
				LEFT JOIN cursos
					ON	aluno_curso.id_curso = cursos.id
				WHERE
					aluno_curso.id_aluno ='$id'
				";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}
		return $array();
	}
}

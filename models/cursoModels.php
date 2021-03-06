<?php

// model de cursos onde lista e busca os alunos matriculados nos respectivos cursos

class CursoModels extends model
{

	public function getCursosDoAluno($id)
	{
		$array = [];

		$sql = " SELECT 
		aluno_curso.id_curso,
		cursos.nome,
		cursos.imagem,
		cursos.descricao
	FROM 
		aluno_curso
	LEFT JOIN cursos
		ON 	aluno_curso.id_aluno = cursos.id
	WHERE
		aluno_curso.id_aluno = '$id'";
		$sql = $this->db->query($sql);
		try {
			if ($sql->rowCount() > 0) {
				$array = $sql->fetchAll();
			}

			return $array;
		} catch (\Throwable $th) {
			echo "error get de alunos" . $th->getMessage();
		}
	}
}

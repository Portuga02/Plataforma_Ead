<?php

// model de cursos onde lista e busca os alunos matriculados nos respectivos cursos

class CursoModels extends model
{

	public function getCursosDoAluno($id)
	{
		$array = array();

		$sql = " SELECT 
		alunos.id,
		cursos.nome,
		cursos.imagem,
		cursos.descricao
	FROM 
		alunos
	LEFT JOIN cursos
	ON 	alunos.id = cursos.id
	WHERE
		alunos.id = '$id'";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}
}

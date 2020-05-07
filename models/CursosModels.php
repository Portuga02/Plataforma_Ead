<?php

// model de cursos onde lista e busca os alunos matriculados nos respectivos cursos

class CursosModels extends model {

	public function getCursosAluno($id) {
		$array = array();
		
		$query = "SELECT id_curso FROM aluno_curso WHERE id_aluno ='$id'";
		$query = $this->db->query($query);

		if($sql->rowCount () >  0){
			$rows = $query->fetchAll()
		}
	}

}
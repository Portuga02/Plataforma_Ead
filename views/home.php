<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
</head>

<body>
	<h1> Seus Cursos </h1>

	<?php foreach ($cursos as $curso) : ?>
		<a href="<?php echo BASE; ?>cursos/entrar/
		<?php echo $curso['id_curso']; ?>">
			|<div class="cursoitem">
				<img src="" border="0" alt="" width="100%">
				<strong> <?php echo $curso['nome']; ?></strong> <BR> <BR>

				<?php echo $curso['descricao']; ?>
			</div>
		</a>
	<?php endforeach; ?>
</body>

</html>
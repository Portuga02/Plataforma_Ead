<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE ?>assets/css/template.css">
	<title>EAD</title>
</head>

<body>
	<div class="topo">
		<a href="<?php echo BASE; ?>login/logout">
			<div class="topo"> Sair </div>
		</a>


		<div class="topousuario "> <?php echo $viewData['info']->getNome(); ?></div> <!-- utilizado para fazer o retorno do aluno na view, o aluno logado-->
	</div>


	<?php $this->loadViewInTemplate($viewName, $viewData); ?>
</body>

</html>
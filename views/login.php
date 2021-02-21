<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Plataforma de ensino a distancia </title>

	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
	<div id="login">
		<h3 class="text-center text-white pt-5">Login formulario</h3>
		<div class="container">
			<div id="login-row" class="row justify-content-center align-items-center">
				<div id="login-column" class="col-md-6">
					<div id="login-box" class="col-md-12">
						<form method="post" class="form">
							<h3 class="text-center text-info">Sistema E.A.D.</h3>
							<div class="form-group">
								<label for="username" class="text-info">Usuário:</label><br>
								<input type="email" class="form-control" name="email" placeholder="Digite seu email padrão">

							</div>
							<div class="form-group">
								<label class="text-info">Senha de Acesso:</label><br>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="senha">

							</div>
							<!-- COMANDO PHP PARA EMITIR ERRO CASO NÃO ESTEJA CADASTRADO EM SISTEMA-->
							<!-- <?php if (isset($error) && !empty($error)) : ?>
								<div class="alert alert-warning" role="alert"><?php echo $error; ?></div>
							<?php endif; ?> -->
							<br>
							<button type="submit" class="btn btn-primary">Entrar</button>

						</form>
						<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
						<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
						<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
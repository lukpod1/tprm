<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
	<title>Home - TPRM</title>
	<style>
		* {
			font-family: 'Poppins', sans-serif;
		}
		body {
			background-color: #6c5ce7;
		}


		nav {
    		background-color: #673AB7;
		}
	</style>
	
</head>
<body>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark static-top">
		<div class="container">
			<a class="navbar-brand" href="#">T.P.R.M</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<?= anchor("usuario/home", "Ínicio", array("class" => "nav-link")) ?>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cadastrar</a>
						<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
							<?= anchor("usuario/user", "Usuario de Sistema", array("class" => "dropdown-item")) ?>
							<div class="dropdown-divider"></div>
							<?= anchor("cliente/client", "Clientes", array("class" => "dropdown-item")) ?>
						</div>
					</li>
					<li class="nav-item">
						<?= anchor("login/logout", "Sair", array("class" => "nav-link")) ?>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="card mt-4">
			<div class="card-body">
				<h5 class="card-title text-center">Dados do Usuario | <?= $usuario['nome']?></h5>
				<hr class="my-4">
				<b>Nome:</b> <?= $usuario['nome']?><br>
				<b>Email:</b> <?= $usuario['email']?><br>
				<b>Senha de Acesso:</b> <?= $usuario['senha']?><br>
				<hr class="my-4">
				<?= anchor("usuario/user", "Voltar", array("class" => "btn btn-primary ")) ?> 	
			</div>
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>

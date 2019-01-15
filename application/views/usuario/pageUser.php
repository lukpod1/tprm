<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url('/style/base.css')?>">
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

	<?php if($this->session->flashdata('success')) : ?>
		<p class="alert alert-success"><?= $this->session->flashdata('success') ?></p>
	<?php endif ?>

	<?php if($this->session->flashdata('danger')) : ?>
		<p class="alert alert-danger"><?= $this->session->flashdata('danger') ?></p>
	<?php endif ?>

	<!-- Page Content -->
	<div class="container">

		<div class="row" >
			<div class="col-md-12" >
				<div class="card mt-5" style="border-radius: 30px;">
					<div class="card-body">	
						<div class="row">
							<div class="col-md-5">
								<h3>Lista de Usuarios</h3>
							</div>
							<div class="col-md-7">
								<div class="col-sm-12">
									<input class="form-control" id="myInput" type="text" placeholder="Pesquisar..">
								</div>
							</div>
						</div>	

						<table class="table">

							<tr class="thead-light">
								<th>Nome</th>
								<th>E-mail</th>
								<th>Senha de Acesso</th>
								<th>Ações</th>
							</tr>

							<?php foreach ($usuarios as $usuario) : ?>
								<tbody id="myTable">
									<tr>
										<td><?= $usuario['nome'] ?></td>
										<td><?= $usuario['email'] ?></td>
										<td><?= $usuario['senha']?></td>
										<td>
											<a href="#" data-toggle="dropdown" aria-expanded="false">
												<i class="fas fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
												<?= anchor("usuario/consultar?id={$usuario["id"]}", "Consultar", array("class" => "dropdown-item")) ?>	

												<div class="dropdown-divider"></div>

												<?= anchor("#", "Editar", array(
													"class" => "dropdown-item",
													"data-toggle" => "modal",
													"data-target" => "#myModalUsuario",
													"data-id" => $usuario["id"],
													"data-nome" => $usuario["nome"],
													"data-email" => $usuario["email"],
													"data-senha" => $usuario["senha"]
												)) ?>
												
												<div class="dropdown-divider"></div>

												<?= anchor("usuario/delete/".$usuario["id"], "Excluir", array(
													"class" => "dropdown-item",
													"data-toggle" => "modal",
													"data-target" => "#myAlertaExcluirUsuario",
													"data-id" => $usuario["id"],
													"id" => "excluirUsuario"
												)) ?>
											</div>
										</td>
									</tr>
								</tbody>
							<?php endforeach ?>

							<tr>
								<?php 
									echo form_open('usuario/novo');
								?>

								<td>
									<?php
										echo form_input(array(
											"name" => "nome",
											"id" => "nome",
											"class" => "form-control",
											"autofocus" => TRUE,
											"placeholder" => "Nome",
											"style" =>  "border: 1px #6c5ce7 solid; border-radius: 10px;"
										));
									?>
								</td>

								<td>
									<?php	
										echo form_input(array(
											"name" => "email",
											"id" => "email",
											"class" => "form-control",
											"placeholder" => "E-mail",
											"style" =>  "border: 1px #6c5ce7 solid; border-radius: 10px;"
										));
									?>
								</td>

								<td>
									<?php	
										echo form_password(array(
											"name" => "senha",
											"id" => "senha",
											"class" => "form-control",
											"placeholder" => "Senha",
											"style" =>  "border: 1px #6c5ce7 solid; border-radius: 10px;"
										));
									?>
								</td>

								<td>
									<?php
										echo form_button(array(
											"class" => "btn btn-primary",
											"type" => "submit",
											"content" => "Cadastrar",
											"style" => "background: #7C4DFF; border: 0.8px #7C4DFF solid"
										));
									?>
								</td>	
										
								<?php
									echo form_close();
								?>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		
	</div>

	
	<?php include "modalUsuario.php"?>
	<?php include "alertaExcluirUsuario.php"?>
	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function () {
            $("#myInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

		$('#myModalUsuario').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) //Button that triggered the modal
			var id = button.data('id')
			var nome = button.data('nome') //Extract info from data-* attributes
			var email = button.data('email') //Extract info from data-* attributes
			var senha = button.data('senha') //Extract info from data-* attributes

			//If necessary, you could initiate an AJAX request here(and then do the updating in a callback).
			// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
			var modal = $(this)
			if (id != null) {
				modal.find('.modal-title').text('Editar ' + nome)
			}
			modal.find('.modal-body input#id').val(id)
			modal.find('.modal-body input#nome').val(nome)
			modal.find('.modal-body input#email').val(email)
			modal.find('.modal-body input#senha').val(senha)
		})
		
		$('a[data-target="#myAlertaExcluirUsuario"]').on('click', function (event) {
			event.preventDefault();
			var id = $(this).data('id');
			$('.delete').attr('href', 'delete/' + id);
			$('#myAlertaTarefa').modal('show');
			
				//If necessary, you could initiate an AJAX request here(and then do the updating in a callback).
				// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

				
			// $('#excluirTarefa').attr('href', '/tarefa/excluir?id=' + id)

		});
	</script>
</body>
</html>

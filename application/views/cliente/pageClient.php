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

	<!-- Page Content -->
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-8">
				<div class="card mt-5" style="border-radius: 30px;">
					<div class="card-body" >
						<div class="row">
							<div class="col-md-5">
								<h3>Lista de Clientes</h3>
							</div>
							<div class="col-md-7">
								<div class="col-sm-12">
									<input class="form-control" id="myInput" type="text" placeholder="Pesquisar..">
								</div>
							</div>
						</div>
							<table class="table">
								<tr>
									<th>Nome</th>
									<th>E-mail</th>
									<th>CPF</th>
									<th>Ações</th>
								</tr>

								<?php foreach ($clientes as $cliente) : ?>
									<tbody id="myTable">
										<tr>
											<td><?= $cliente['nome'] ?></td>
											<td><?= $cliente['email'] ?></td>
											<td><?= $cliente['cpf']?></td>
											
											<td>
												<a href="#" data-toggle="dropdown" aria-expanded="false">
													<i class="fas fa-ellipsis-h"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
													
													<?= anchor("cliente/consultar?id={$cliente["id"]}", "Consultar", array("class" => "dropdown-item")) ?>	
													
													<div class="dropdown-divider"></div>

													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModalCliente" data-id="<?= $cliente["id"]?>" data-nome="<?= $cliente["nome"]?>" data-email="<?= $cliente["email"]?>" data-cpf="<?= $cliente["cpf"]?>">Editar</a>
													
													<div class="dropdown-divider"></div>
													
													<a class="dropdown-item" data-toggle="modal" data-target="#myAlertaExcluirCliente" data-id="<?= $cliente["id"]?>"  id="excluirCliente" href="cliente/delete/<?=$cliente["id"]?>">Excluir</a>
												</div>
											</td>
										</tr>
									</tbody>
								<?php endforeach ?>
							</table>
						
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="" >
					<div class="card card-signin flex-row my-5 mt-5" style="border-radius: 30px;">
						<div class="card-body">
							<h5 class="card-title text-center">Cadastro de Clientes</h5>
							
							<?php
								$attributes = array('class' => 'form-signin');
								echo form_open('cliente/novo');
							?>

							<div class="form-label-group">
								<?php 
									echo form_label("Nome", "nome");
									echo form_input(array(
										"name" => "nome",
										"id" => "nome",
										"class" => "form-control",
										"maxlength" => "255",
										"placeholder" => "João da Silva",
										"required" => true
									));
									
								?>
							</div>

							<div class="form-label-group">
								<?php 
									echo form_label("Email", "email");
									echo form_input(array(
										"name" => "email",
										"id" => "email",
										"class" => "form-control",
										"maxlength" => "255",
										"placeholder" => "exmplo@gmail.com",
										"required" => true
									));
									
								?>
							</div>

							<div class="form-label-group">
								<?php 
									echo form_label("CPF", "cpf");
									echo form_input(array(
										"name" => "cpf",
										"id" => "cpf",
										"class" => "form-control",
										"maxlength" => "255",
										"placeholder" => "xxx.xxx.xxx-xx",
										"required" => true
									));
									
								?>
							</div>

							<div class="form-label-group">
								<?php 
									echo form_label("Telefone", "telefone");
									echo form_input(array(
										"name" => "telefone",
										"id" => "telefone",
										"class" => "form-control",
										"maxlength" => "255",
										"placeholder" => "(99) 9999-9999",
										"required" => true
									));
									
								?>
							</div>
								
							<div class="form-label-group">
								<?php 
									echo form_label("Endereço", "endereco");
									echo form_input(array(
										"name" => "endereco",
										"id" => "endereco",
										"class" => "form-control",
										"maxlength" => "255",
										"placeholder" => "Rua 15, Nº 05",
										"required" => true
									));
								?>
							</div>
							<br>
							<?php
								echo form_button(array(
									"class" => "btn btn-lg btn-primary btn-block text-uppercase",
									"type" => "submit",
									"content" => "Cadastrar",
									"style" => "background-color: #6200EA; border-radius: 30px;"
								));
								echo form_close();
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<?php include "modalCliente.php"?>
	<?php include "alertaExcluirCliente.php"?>
	

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

		$('#myModalCliente').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) //Button that triggered the modal
			var id = button.data('id')
			var nome = button.data('nome') //Extract info from data-* attributes
			var email = button.data('email') //Extract info from data-* attributes
			var cpf = button.data('cpf') //Extract info from data-* attributes

			//If necessary, you could initiate an AJAX request here(and then do the updating in a callback).
			// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
			var modal = $(this)
			if (id != null) {
				modal.find('.modal-title').text('Editar ' + nome)
			}
			modal.find('.modal-body input#id').val(id)
			modal.find('.modal-body input#nome').val(nome)
			modal.find('.modal-body input#email').val(email)
			modal.find('.modal-body input#cpf').val(cpf)
		})
		
		$('a[data-target="#myAlertaExcluirCliente"]').on('click', function (event) {
			event.preventDefault();
			var id = $(this).data('id');
			$('.delete').attr('href', 'delete/' + id);
			$('#myAlertaCliente').modal('show');
			
				//If necessary, you could initiate an AJAX request here(and then do the updating in a callback).
				// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

				
			// $('#excluirTarefa').attr('href', '/tarefa/excluir?id=' + id)

		});
	</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url('/style/login.css')?>">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
	<title>Entrar no TPRM</title>
	<style>
		* {
			font-family: 'Poppins', sans-serif;
		}
	</style>
</head>

<body>
    <div class="container">

		<?php if($this->session->flashdata('success')) : ?>
			<p class="alert alert-success"><?= $this->session->flashdata('success') ?></p>
		<?php endif ?>

		<?php if($this->session->flashdata('danger')) : ?>
			<p class="alert alert-danger"><?= $this->session->flashdata('danger') ?></p>
		<?php endif ?>

        <div class="row">
            <div class="col-lg-8 col-xl-12 mx-auto" style="margin-top:40px;">
                <div class="card card-signin flex-row my-5" >
                    
                    <div class="card-body">
						<h5 class="card-title text-center">Fazer Login no T.P.R.M</h5>
						<?php
							$attributes = array('class' => 'form-signin');
							echo form_open('login/autenticar', array(
								'class' => 'form-signin'
							));
						?>
						<div class="form-label-group">
						<?php 
							
							echo form_input(array(
								"name" => "email",
								"id" => "email",
								"class" => "form-control",
								"maxlength" => "255",
								"required" => true
							));
							echo form_label("Email", "email");
						?>
						</div>
							
						<div class="form-label-group">
							<?php 
								
								echo form_password(array(
									"name" => "senha",
									"id" => "senha",
									"class" => "form-control",
									"maxlength" => "255",
									"required" => true
								));
								echo form_label("Senha", "senha");
							?>
						</div>

						<?php
							echo form_button(array(
								"class" => "btn btn-lg btn-primary btn-block text-uppercase",
								"type" => "submit",
								"content" => "Login",
								"style" => "background-color: #6200EA; border-radius: 30px;"
							));
							echo form_close();
						?>
					</div>
					<div class="card-img-left d-none d-md-flex" style="height: 450px;">
                        <!-- Background image for card set in CSS! -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>

</html>

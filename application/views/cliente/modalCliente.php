<!-- The Modal -->
<div class="modal fade" id="myModalCliente">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Editar Cliente</h4>
				<a href="#" data-dismiss="modal" class="close">&times;</a>
			</div>

			<!-- Modal body -->
			<form method="post" action="atualizar/<?= $cliente["id"]?>">

				<div class="modal-body">

					<div class="form-group">
						<input type="hidden" name="id" id="id" value="<?= $cliente["id"]?>">
						
						<label for="nome">Nome</label>
						<input type="text" name="nome" id="nome" class="form-control" value="<?= $cliente["nome"]?>">

						<label for="email">Email</label>
						<input type="text" name="email" id="email" class="form-control" value="<?= $cliente["email"]?>">

						<label for="cpf">CPF</label>
						<input type="text" name="cpf" id="cpf" class="form-control" value="<?= $cliente["cpf"]?>">
						
						<label for="telefone">Telefone</label>
						<input type="text" name="telefone" id="telefone" class="form-control" value="<?= $cliente["telefone"]?>">

						<label for="endereco">Endereço</label>
						<input type="text" name="endereco" id="endereco" class="form-control" placeholder="Rua 10, Nº 05" value="<?= $cliente["endereco"]?>">
					</div>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" style="margin-left: 20px;">Salvar</button>
					<a href="#" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
				</div>
			</form>
		</div>
	</div>
</div>

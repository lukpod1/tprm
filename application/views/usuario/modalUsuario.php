<!-- The Modal -->
<div class="modal fade" id="myModalUsuario">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Editar Usuario</h4>
				<a href="#" data-dismiss="modal" class="close">&times;</a>
			</div>

			<!-- Modal body -->
			<form method="post" action="atualizar/<?= $usuario["id"]?>">

				<div class="modal-body">

					<div class="form-group">
						<input type="hidden" name="id" id="id" value="<?= $usuario["id"]?>">
						
						<label for="nome">Nome</label>
						<input type="text" name="nome" id="nome" class="form-control" value="<?= $usuario["nome"]?>">

						<label for="email">Email</label>
						<input type="text" name="email" id="email" class="form-control" value="<?= $usuario["email"]?>">

						<label for="senha">Senha</label>
						<input type="text" name="senha" id="senha" class="form-control" value="<?= $usuario["senha"]?>">
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

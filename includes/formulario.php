<?php 
	use \App\Entity\Usuario;
 ?>
	<main>
		<div class="container mt-5 pt-5">
			<section>
				<a href="index.php">
					<button class="btn btn-success">Voltar</button>
				</a>
			</section>

			<h2 class="mt-3"><?= TITLE ?></h2>

			<form method="POST">
				<div class="form-group mt-3">
					<label>Nome</label>
					<input type="text" class="form-control" name="nome" minlength="8" maxlength="255" 
					<?php if (@$usuario != 'null') {
									echo 'value="'.@$usuario->nome.'"';			
								 }else{
									echo 'null';
								 } ?>
							required>

				</div>

				<div class="form-group mt-3">
					<label>Email</label>
					<input type="email" class="form-control" name="email" minlength="12" maxlength="255" 
					<?php if (@$usuario != 'null') {
									echo 'value="'.@$usuario->email.'"';			
								 }else{
									echo 'null';
								 } ?>
							required>
				</div>

				<div class="form-group mt-3">
					<label>RG</label>
					<input type="text" class="form-control" name="rg" minlength="12" maxlength="12" 
					<?php if (@$usuario != 'null') {
									echo 'value="'.@$usuario->rg.'"';			
								 }else{
									echo "";
								 } ?>
							required>
				</div>

				<div class="form-group mt-3">
					<label>CPF</label>
					<input type="text" class="form-control" name="cpf" minlength="14" maxlength="14" 
					<?php if (@$usuario != 'null') {
									echo 'value="'.@$usuario->cpf.'"';			
								 }else{
									echo "";
								 } ?>
							required>
				</div>

				<div class="form-group mt-3">
					<label>Telefone</label>
					<input type="text" class="form-control" name="telefone" minlength="14" maxlength="14" 
					<?php if (@$usuario != 'null') {
									echo 'value="'.@$usuario->telefone.'"';			
								 }else{
									echo "";
								 } ?>
							required>
				</div>

				<div class="form-group mt-3">
					<label>Status</label>

					<div>
						<div class="form-check form-check-inline">
							<label class="form-control">
								<input type="radio" name="ativo" value="1" checked> Ativo
							</label>
						</div>

						<div class="form-check form-check-inline">
							<label class="form-control">
								<input type="radio" name="ativo" value="0" 
									<?php //$usuario->ativo == '0' ? 'checked' : '' 
										if (@$usuario != 'null') {
											if (@$usuario->ativo == '0') {
												echo "checked";
											}else{
												echo "";
											}
										}?>> 

								Inativo
							</label>
						</div>
					</div>
				</div>

				<div class="form-group mt-3 mb-3">
					<button class="btn btn-success" type="submit">Enviar</button>
				</div>
			</form>
		</div>
	</main>
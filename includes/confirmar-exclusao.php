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

			<h2 class="mt-3">Excluir Vaga</h2>

			<form method="POST">
				<div class="form-group mt-3">
					<p>Você deseja realmente excluir o usuário <strong><?= $usuario->nome; ?></strong> ?</p>
				</div>

				<div class="form-group mt-3">
					<a href="index.php">
						<button type="button" class="btn btn-success">Cancelar</button>
					</a>

					<button class="btn btn-danger" name="excluir" type="submit">Excluir</button>
				</div>
			</form>
		</div>
	</main>
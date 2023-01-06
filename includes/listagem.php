	<?php 

	$mensagem = '';
	if (isset($_GET['status'])) {
		switch ($_GET['status']) {
			case 'success':
				$mensagem = '<div class = "alert alert-success">Ação executada com sucesso ! <button type="button" aria-label="Close" data-bs-dismiss="alert" class="btn-close"> </button></div>';
				break;
			
			case 'error':
				$mensagem = '<div class = "alert alert-danger">Ação não executada ! <button type="button" aria-label="Close" data-bs-dismiss="alert" class="btn-close"> </button></div>';
				break;
		}
	}

	$resultados = '';
	foreach ($usuarios as $usuario) {
		$resultados .= '<tr>
							<td>' .$usuario->id. '</td>
							<td>' .$usuario->nome. '</td>
							<td>' .$usuario->email. '</td>
							<td>' .$usuario->rg. '</td>
							<td>' .$usuario->cpf. '</td>
							<td>' .$usuario->telefone. '</td>
							<td>' .($usuario->ativo == '1' ? 'Sim' : 'Não'). '</td>
							<td>
								<a href="editar.php?id=' .$usuario->id. '">
									<button type="button" class="btn btn-primary">Editar</button>
								</a>
								<a href="excluir.php?id=' .$usuario->id. '">
									<button type="button" class="btn btn-danger">Excluir</button>
								</a>
							</td>
						</tr>';
	}
	 ?>

	<main>
		<div class="container mt-5 pt-5">

			<?= $mensagem; ?>
			<section>
				<a href="cadastrar.php">
					<button class="btn btn-success">Novo usuário</button>
				</a>
			</section>

			<section>

				<h2 class="mt-3"><?= TITLE; ?></h2>

				<table class="table mt-3">
					<thead>
						<tr>
							<th>Id</th>
							<th>Nome</th>
							<th>Email</th>
							<th>RG</th>
							<th>CPF</th>
							<th>Telefone</th>
							<th>Ativo</th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
						<?= $resultados; ?>
					</tbody>
				</table>	
			</section>
			
		</div>
	</main>
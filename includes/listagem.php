	<?php 

	$mensagem = '';
	if (isset($_GET['status'])) {
		switch ($_GET['status']) {
			case 'success':
				$mensagem = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  								<strong>Ação executada com sucesso!</strong>  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>';
				break;
			
			case 'error':
				$mensagem = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  								<strong>Ação não executada!</strong>  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>';
				break;
		}
	}

	$resultados = '';
	foreach ($usuarios as $usuario) {
		$resultados .= '<tr>
							<td class="id">' .$usuario->id. '</td>
							<td class="nome">' .$usuario->nome. '</td>
							<td class="email">' .$usuario->email. '</td>
							<td>' .$usuario->rg. '</td>
							<td>' .$usuario->cpf. '</td>
							<td>' .$usuario->telefone. '</td>
							<td class="ativo">' .($usuario->ativo == '1' ? 'Sim' : 'Não'). '</td>
							<td>
								<a href="editar.php?id=' .$usuario->id. '">
									<button type="button" class="btn btn-primary botao_lista">Editar</button>
								</a>
								<a href="excluir.php?id=' .$usuario->id. '">
									<button type="button" class="btn btn-danger botao_lista">Excluir</button>
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
							<th class="id">Id</th>
							<th class="nome">Nome</th>
							<th class="email">Email</th>
							<th>RG</th>
							<th>CPF</th>
							<th>Telefone</th>
							<th class="ativo">Ativo</th>
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
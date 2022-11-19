	<?php 

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
							<td></td>
						</tr>';
	}
	 ?>

	<main>
		<div class="container mt-5 pt-5">
			<section>
				<a href="cadastrar.php">
					<button class="btn btn-success">Novo usuário</button>
				</a>
			</section>

			<section>
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
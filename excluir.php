<?php 
	
	require __DIR__.'/vendor/autoload.php';

	use \App\Entity\Usuario;

	//Validação do id
	if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
		header('location: index.php?status=error');
		exit;
	}

	//Consultando a vaga para excluir
	$usuario = Usuario::getUsuario($_GET['id']);
	
	//Validação da vaga
	if (!$usuario instanceof Usuario) {
		header('location: index.php?status=error');
		exit;				
	}
	//Validação do POST
	if (isset($_POST['excluir'])) {
		//echo "<pre>"; print_r($usuario); echo "</pre>"; exit;

		$usuario->excluir();

		header('location: index.php?status=success');
		exit;
	}

	include __DIR__.'/includes/header.php';
	include __DIR__.'/includes/confirmar-exclusao.php';
	include __DIR__.'/includes/footer.php';


 ?>
<?php 
	
	require __DIR__.'/vendor/autoload.php';

	use \App\Entity\Usuario;

	//Validação do id
	if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
		header('location: index.php?status=error');
		exit;
	}

	$usuario = Usuario::getUsuario($_GET['id']);
	echo "<pre>"; print_r($usuario); echo "</pre>"; exit;

	//Validação do POST
	if (isset($_POST['nome'],$_POST['email'],$_POST['rg'],$_POST['cpf'],$_POST['telefone'],$_POST['ativo'])) {
		$usuario = new Usuario;
		$usuario->nome 	   = $_POST['nome'];
		$usuario->email    = $_POST['email'];
		$usuario->rg 	   = $_POST['rg'];
		$usuario->cpf 	   = $_POST['cpf'];
		$usuario->telefone = $_POST['telefone'];
		$usuario->ativo    = $_POST['ativo'];

		$usuario->cadastrar();

		header('location: index.php?status=success');
		exit;
	}

	include __DIR__.'/includes/header.php';
	include __DIR__.'/includes/formulario.php';
	include __DIR__.'/includes/footer.php';


 ?>
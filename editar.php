<?php 
	
	require __DIR__.'/vendor/autoload.php';

	define('TITLE','Editar vaga');

	use \App\Entity\Usuario;

	//Validação do id
	if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
		header('location: index.php?status=error');
		exit;
	}

	//Consultando a vaga para editar
	$usuario = Usuario::getUsuario($_GET['id']);
	
	//Validação da vaga
	if (!$usuario instanceof Usuario) {
		header('location: index.php?status=error');
		exit;				
	}

	//Validação do POST
	if (isset($_POST['nome'],$_POST['email'],$_POST['rg'],$_POST['cpf'],$_POST['telefone'],$_POST['ativo'])) {
		$usuario->nome 	   = $_POST['nome'];
		$usuario->email    = $_POST['email'];
		$usuario->rg 	   = $_POST['rg'];
		$usuario->cpf 	   = $_POST['cpf'];
		$usuario->telefone = $_POST['telefone'];
		$usuario->ativo    = $_POST['ativo'];
		//echo "<pre>"; print_r($usuario); echo "</pre>"; exit;

		$usuario->atualizar();

		header('location: index.php?status=success');
		exit;
	}

	include __DIR__.'/includes/header.php';
	include __DIR__.'/includes/formulario.php';
	include __DIR__.'/includes/footer.php';


 ?>
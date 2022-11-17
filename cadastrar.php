<?php 
	
	require __DIR__.'/vendor/autoload.php';

	use \App\Entity\Usuario;

	

	//Validação do POST
	if (isset($_POST['nome'],$_POST['email'],$_POST['rg'],$_POST['cpf'],$_POST['telefone'],$_POST['ativo'])) {
		$usuario = new Usuario;
		$usuario->nome 	   = $_POST['nome'];
		$usuario->email    = $_POST['email'];
		$usuario->rg 	   = $_POST['rg'];
		$usuario->cpf 	   = $_POST['cpf'];
		$usuario->telefone = $_POST['telefone'];
		$usuario->ativo    = $_POST['ativo'];
		
		//echo "<pre>"; print_r($usuario);echo "</pre>";

		$usuario->cadastrar();

	}

	include __DIR__.'/includes/header.php';
	include __DIR__.'/includes/formulario.php';
	include __DIR__.'/includes/footer.php';


 ?>
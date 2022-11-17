<?php 
	
	require __DIR__.'/vendor/autoload.php';

	echo "<pre>"; print_r($_POST);echo "</pre>";

	//Validação do POST
	if (isset($_POST['nome'],$_POST['email'],$_POST['rg'],$_POST['cpf'],$_POST['telefone'],$_POST['ativo'])) {
		exit('Cadastrar');
	}

	include __DIR__.'/includes/header.php';
	include __DIR__.'/includes/formulario.php';
	include __DIR__.'/includes/footer.php';


 ?>
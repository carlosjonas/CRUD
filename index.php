<?php 
	
	require __DIR__.'/vendor/autoload.php';

	define('TITLE','Lista de Usuários');
	
	use \App\Entity\Usuario;

	$usuarios = Usuario::getUsuarios();

	include __DIR__.'/includes/header.php';
	include __DIR__.'/includes/listagem.php';
	include __DIR__.'/includes/footer.php';


 ?>
<?php 
	
	require __DIR__.'/vendor/autoload.php';

	define('TITLE','Usuários ativos');
	define('ATIVO','ativos');

	use \App\Entity\Usuario;

	$usuarios = Usuario::getUsuarios($where=' ativo = 1');

	include __DIR__.'/includes/header.php';
	include __DIR__.'/includes/listagem.php';
	include __DIR__.'/includes/footer.php';
 ?>
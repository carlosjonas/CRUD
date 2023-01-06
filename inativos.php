<?php 
	
	require __DIR__.'/vendor/autoload.php';

	define('TITLE','Usuários inativos');

	use \App\Entity\Usuario;

	$usuarios = Usuario::getUsuarios($where=' ativo = 0');

	include __DIR__.'/includes/header.php';
	include __DIR__.'/includes/listagem.php';
	include __DIR__.'/includes/footer.php';
 ?>
<?php 

namespace App\Entity;

	/**
	 * Classe usuário para o gerenciamento de dados da aplicação
	 */
	class Usuario
	{
		/**
		 * Identificador do usuário
		 * @var integer
		 */
		public $id;

		/**
		 * Nome do usuário
		 * @var string
		 */
		public $nome;

		/**
		 * Email do usuário
		 * @var string
		 */
		public $email;

		/**
		 * RG do usuário
		 * @var string
		 */
		public $rg;

		/**
		 * CPF do usuário
		 * @var string
		 */
		public $cpf;

		/**
		 * Telefone do usuário
		 * @var string
		 */
		public $telefone;

		/**
		 * Status do usuário
		 * @var boolean
		 */
		public $ativo;
	}




 ?>
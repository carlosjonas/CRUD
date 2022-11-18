<?php 

namespace App\Entity;

use \App\Db\Database;

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

		/**
		 * Método responsável por cadastrar um usuário no banco
		 * @return boolean
		 */
		public function cadastrar(){
			//Inserindo a vaga no banco
			$database = new Database('usuarios');
			$this->id = $database->insert([
				'nome' 	   => $this->nome,
				'email'    => $this->email,
				'rg' 	   => $this->rg,
				'cpf' 	   => $this->cpf,
				'telefone' => $this->telefone,
				'ativo'    => $this->ativo,
			]);

			//Retornar sucesso
			return true;
		}
	}




 ?>
<?php 

namespace App\Entity;

use \App\Db\Database;
use \PDO;

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
				'ativo'    => $this->ativo
			]);

			//Retornar sucesso
			return true;
		}

		/**
		 * Método responsável por atualizar um usuário no banco
		 * @return boolean
		 */
		public function atualizar(){
			//Inserindo a vaga no banco
			return (new Database('usuarios'))->update('id = ' .$this->id,[
				'nome' 	   => $this->nome,
				'email'    => $this->email,
				'rg' 	   => $this->rg,
				'cpf' 	   => $this->cpf,
				'telefone' => $this->telefone,
				'ativo'    => $this->ativo
			]);

			//Retornar sucesso
			return true;
		}

		/**
		 * Método responsável por excluir um usuário no banco
		 * @return boolean
		 */
		public function excluir(){
			//Inserindo a vaga no banco
			return (new Database('usuarios'))->delete('id = ' .$this->id);

			//Retornar sucesso
			return true;
		}

		/**
		 * Método responsável por consultar os usuários no banco
		 * @param string $where
		 * @param string $order
		 * @param string $limit
		 * @return array
		 */
		public static function getUsuarios($where = null, $order = null, $limit = null){
			//Inserindo a vaga no banco
			return (new Database('usuarios'))->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS,self::class);

		}

		/**
		 * Método responsável por buscar um usuário com base em seu id no banco
		 * @param integer $id
		 * @return Usuario
		 */
		public static function getUsuario($id){
			//Inserindo a vaga no banco
			return (new Database('usuarios'))->select('id= ' .$id)->fetchObject(self::class);

			//Retornar sucesso
			//return true;
		}
	}
 ?>
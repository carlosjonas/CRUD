<?php 
	
	namespace App\Db;

	use \PDO;
	use \PDOException;

	class Database{

		/**
		 * Host de conexão com o banco de dados
		 * @var string
		 */
		const HOST = 'localhost';

		/**
		 * Nome do banco de dados
		 * @var string
		 */
		const NAME = 'cadastro';

		/**
		 * Usuário do banco de dados
		 * @var string
		 */
		const USER = 'root';
		
		/**
		 * Senha do banco de dados
		 * @var string
		 */
		const PASSWORD = '';

		/**
		 * nome da tabela do banco de dados
		 * @var string
		 */
		private $table;

		/**
		 * Instância de conexão com o banco de dados
		 * @var PDO
		 */
		private $connection;

		/**
		 * Define a tabela e instância a conexão
		 * @param string $table
		 */
		public function __construct($table = null){
			$this->table = $table;
			$this->setConnection();
		}

		/**
		 * Método responsável por criar uma conexão com o banco
		 * @param string $table
		 */
		private function setConnection(){
			try{
				$this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASSWORD);

				//Configurando o pdo para sempre lançar uma exception sempre algo não saia como o esperado
				$this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			}catch(PDOException $e){
				die('ERROR: '.$e->getMessage());
			}
		}

	}


 ?>
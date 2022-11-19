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
		 */
		private function setConnection(){
			try{
				$this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASSWORD);

				//Configurando o pdo para sempre lançar uma exception caso algo não saia como o esperado
				$this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			}catch(PDOException $e){
				die('ERROR: '.$e->getMessage());
			}
		}

		/**
		 * Método responsável por executar as querys do banco
		 * @param string $query
		 * @param array $params
		 * @return PDOStatement
		 */
		private function execute($query,$params = []){
			try{
				$statement = $this->connection->prepare($query);
				$statement->execute($params);
				return $statement;
			}catch(PDOException $e){
				die('ERROR: '.$e->getMessage());
			}
		}

		/**
		 * Método responsável por inserir dados no banco
		 * @param array $values [ fields => value ]
		 * @return integer ID inserido
		 */
		public function insert($values){
			// Dados da query
			$fields = array_keys($values);
			$binds  = array_pad( [] , count($fields) , '?');
			//Monta a query
			$query = 'INSERT INTO ' .$this->table. ' (' .implode(',', $fields). ') VALUES ('.implode(',',$binds).')';

			//Executa o insert
			$this->execute($query,array_values($values));

			//Retorna o id inserido
			return $this->connection->lastInsertId();
		}

		/**
		 * Método responsável por executar uma consulta no banco
		 * @param string $where
		 * @param string $order
		 * @param string $limit
		 * @param string $fields
		 * @return PDOStatement
		 */
		public function select($where = null, $order = null, $limit = null, $fields = '*'){
			// Dados da query
			$where = strlen($where) ? 'WHERE' .$where : '';
			$order = strlen($order) ? 'ORDER BY' .$order : '';
			$limit = strlen($limit) ? 'LIMIT' .$limit : '';
			//Monta a query
			$query = 'SELECT ' .$fields. ' FROM ' .$this->table. ' ' .$where. ' ' .$limit ;

			//Executa a query
			return $this->execute($query);
		}

	}


 ?>
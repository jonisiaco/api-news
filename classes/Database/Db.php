<?php

namespace Database;

/**
 * Class Db
 *
 * @author  Jonisiaco  <jonisiaco@gmail.com>
 */
class Db
{
	public $pdo;

	function __construct()
	{
		$this->pdo = $this->connect();

		return $this->pdo;

	} 

	private function connect()
	{

		$conn = $this->parseFile();
		try {
		    $db = new PDO($conn["DB_CONNECTION"].":host=".$conn["DB_HOST"].":".$conn["DB_PORT"].";dbname="."$conn[DB_DATABASE]".";",$conn["DB_USERNAME"], $conn["DB_PASSWORD"],array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

		} catch (PDOException $e) {
			
		    echo $e->getMessage();
		    exit();
		}

		return $db;

	}

    /**
     * @return bool
     */
	public function beginTransaction()
	{
		return $this->pdo->beginTransaction();
	}

    /**
     * @return bool
     */
	public function commit()
	{
		return $this->pdo->commit();
	}

    /**
     * @return bool
     */
	public function rollBack()
	{
		return $this->pdo->rollBack();
	}

	private function parseFile()
	{

		try {
			$db_inc = parse_ini_file("config/db.inc");

			if( ! $db_inc ){
				throw new Exception("config/db.inc file not found");

		} catch( Throwable $e ) {
			echo $e->getMessage();
			exit();
		}

		return $db_inc;
	}

}
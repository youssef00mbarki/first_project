<?php 

class Connection 
{
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $port = 3307;
	private $dbName = "site";

	private static $connect;


	public function __construct()
	{
		if (self::$connect === null) {
			try {
    			$conn = new PDO("mysql:host=$this->servername;port=$this->port;dbname=$this->dbName", $this->username, $this->password);
			    // set the PDO error mode to exception
			    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			    self::$connect = $conn;
			     echo "Connection successfully" ;
			    }
			catch(PDOException $e)
			    {
			    echo "Connection failed: " . $e->getMessage();
			    }

		}
	}

	public function getConnection()
	{
		return self::$connect;
	}
}


$con = new Connection();

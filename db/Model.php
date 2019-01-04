<?php 
include 'Database.php';
// model used for fetching and persisting data to database
class Model extends Database
{
    /**
     * @var Database
     */
	private $conn;

	public function __construct() {
		parent::__construct();
		$this->conn = $this->getConnection();
	}

    /**
     * @param string $tableName
     * @param array $data
     */
    public function insertDataByTableName(string $tableName, array $data)
    {
        $keys = implode(',', array_keys($data));
        $values = array_values($data);
        $this->conn->insertMultiple($tableName, [$keys], [$values]);
    }
}

$model = new Model();
$model->
$data = [
	'id' => null,
	'title' => 'youssef Project Title',
	'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, hic eum, dignissimos quos non quam harum incidunt! Dolorum, deleniti, minus!',
	'price' => 20

];
// $model->insertDataByTableName('posts', $data);



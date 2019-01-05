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
    public function insertDataByTableName(string $tableName, array $data): void
    {
        $keys = implode(',', array_keys($data));
        $values = array_values($data);
        $this->conn->insertMultiple($tableName, [$keys], [$values]);
    }

    /**
     * @param string $tableName
     * @return array
     */
    public function fetchAll(string $tableName): array
    {
        return $this->conn->select($tableName);
    }

    /**
     * @param string $tableName
     * @param int $id
     * @return array
     */
    public function fetchById(string $tableName, int $id): array
    {
        return $this->conn->select($tableName, ['id' => $id]);
    }

    /**
     * @param string $tableName
     * @param array $data
     * @param int $id
     * @return bool|int
     */
    public function updateById(string $tableName, array $data, int $id)
    {
        return $this->conn->update($tableName, $data, ['id' => $id]);
    }

    /**
     * @param string $tableName
     * @param int $id
     * @return bool|int
     */
    public function deleteById(string $tableName, int $id)
    {
        return $this->conn->delete($tableName, ['id' => $id]);
    }

}

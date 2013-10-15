<?php
/**
 * Class that operate on table 'animal_veterinarian'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2013-10-14 22:30
 */
class AnimalVeterinarianMySqlDAO implements AnimalVeterinarianDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AnimalVeterinarianMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM animal_veterinarian WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM animal_veterinarian';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM animal_veterinarian ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param animalVeterinarian primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM animal_veterinarian WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalVeterinarianMySql animalVeterinarian
 	 */
	public function insert($animalVeterinarian){
		$sql = 'INSERT INTO animal_veterinarian (name, telephone, farm_id, create_time) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalVeterinarian->name);
		$sqlQuery->set($animalVeterinarian->telephone);
		$sqlQuery->set($animalVeterinarian->farmId);
		$sqlQuery->set($animalVeterinarian->createTime);

		$id = $this->executeInsert($sqlQuery);	
		$animalVeterinarian->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalVeterinarianMySql animalVeterinarian
 	 */
	public function update($animalVeterinarian){
		$sql = 'UPDATE animal_veterinarian SET name = ?, telephone = ?, farm_id = ?, create_time = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalVeterinarian->name);
		$sqlQuery->set($animalVeterinarian->telephone);
		$sqlQuery->set($animalVeterinarian->farmId);
		$sqlQuery->set($animalVeterinarian->createTime);

		$sqlQuery->set($animalVeterinarian->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM animal_veterinarian';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByName($value){
		$sql = 'SELECT * FROM animal_veterinarian WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTelephone($value){
		$sql = 'SELECT * FROM animal_veterinarian WHERE telephone = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFarmId($value){
		$sql = 'SELECT * FROM animal_veterinarian WHERE farm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreateTime($value){
		$sql = 'SELECT * FROM animal_veterinarian WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByName($value){
		$sql = 'DELETE FROM animal_veterinarian WHERE name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTelephone($value){
		$sql = 'DELETE FROM animal_veterinarian WHERE telephone = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFarmId($value){
		$sql = 'DELETE FROM animal_veterinarian WHERE farm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreateTime($value){
		$sql = 'DELETE FROM animal_veterinarian WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AnimalVeterinarianMySql 
	 */
	protected function readRow($row){
		$animalVeterinarian = new AnimalVeterinarian();
		
		$animalVeterinarian->id = $row['id'];
		$animalVeterinarian->name = $row['name'];
		$animalVeterinarian->telephone = $row['telephone'];
		$animalVeterinarian->farmId = $row['farm_id'];
		$animalVeterinarian->createTime = $row['create_time'];

		return $animalVeterinarian;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return AnimalVeterinarianMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>
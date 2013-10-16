<?php
/**
 * Class that operate on table 'animal_fodder'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2013-10-16 22:39
 */
class AnimalFodderMySqlDAO implements AnimalFodderDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AnimalFodderMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM animal_fodder WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM animal_fodder';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM animal_fodder ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param animalFodder primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM animal_fodder WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalFodderMySql animalFodder
 	 */
	public function insert($animalFodder){
		$sql = 'INSERT INTO animal_fodder (fodder_type_id, fodder_type_name, fodder_unit, fodder_count, fodder_price, farm_id, fodder_status, create_date, create_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalFodder->fodderTypeId);
		$sqlQuery->set($animalFodder->fodderTypeName);
		$sqlQuery->set($animalFodder->fodderUnit);
		$sqlQuery->set($animalFodder->fodderCount);
		$sqlQuery->set($animalFodder->fodderPrice);
		$sqlQuery->set($animalFodder->farmId);
		$sqlQuery->setNumber($animalFodder->fodderStatus);
		$sqlQuery->set($animalFodder->createDate);
		$sqlQuery->set($animalFodder->createTime);

		$id = $this->executeInsert($sqlQuery);	
		$animalFodder->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalFodderMySql animalFodder
 	 */
	public function update($animalFodder){
		$sql = 'UPDATE animal_fodder SET fodder_type_id = ?, fodder_type_name = ?, fodder_unit = ?, fodder_count = ?, fodder_price = ?, farm_id = ?, fodder_status = ?, create_date = ?, create_time = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalFodder->fodderTypeId);
		$sqlQuery->set($animalFodder->fodderTypeName);
		$sqlQuery->set($animalFodder->fodderUnit);
		$sqlQuery->set($animalFodder->fodderCount);
		$sqlQuery->set($animalFodder->fodderPrice);
		$sqlQuery->set($animalFodder->farmId);
		$sqlQuery->setNumber($animalFodder->fodderStatus);
		$sqlQuery->set($animalFodder->createDate);
		$sqlQuery->set($animalFodder->createTime);

		$sqlQuery->set($animalFodder->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM animal_fodder';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByFodderTypeId($value){
		$sql = 'SELECT * FROM animal_fodder WHERE fodder_type_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFodderTypeName($value){
		$sql = 'SELECT * FROM animal_fodder WHERE fodder_type_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFodderUnit($value){
		$sql = 'SELECT * FROM animal_fodder WHERE fodder_unit = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFodderCount($value){
		$sql = 'SELECT * FROM animal_fodder WHERE fodder_count = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFodderPrice($value){
		$sql = 'SELECT * FROM animal_fodder WHERE fodder_price = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFarmId($value){
		$sql = 'SELECT * FROM animal_fodder WHERE farm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFodderStatus($value){
		$sql = 'SELECT * FROM animal_fodder WHERE fodder_status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreateDate($value){
		$sql = 'SELECT * FROM animal_fodder WHERE create_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreateTime($value){
		$sql = 'SELECT * FROM animal_fodder WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByFodderTypeId($value){
		$sql = 'DELETE FROM animal_fodder WHERE fodder_type_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFodderTypeName($value){
		$sql = 'DELETE FROM animal_fodder WHERE fodder_type_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFodderUnit($value){
		$sql = 'DELETE FROM animal_fodder WHERE fodder_unit = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFodderCount($value){
		$sql = 'DELETE FROM animal_fodder WHERE fodder_count = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFodderPrice($value){
		$sql = 'DELETE FROM animal_fodder WHERE fodder_price = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFarmId($value){
		$sql = 'DELETE FROM animal_fodder WHERE farm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFodderStatus($value){
		$sql = 'DELETE FROM animal_fodder WHERE fodder_status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreateDate($value){
		$sql = 'DELETE FROM animal_fodder WHERE create_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreateTime($value){
		$sql = 'DELETE FROM animal_fodder WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AnimalFodderMySql 
	 */
	protected function readRow($row){
		$animalFodder = new AnimalFodder();
		
		$animalFodder->id = $row['id'];
		$animalFodder->fodderTypeId = $row['fodder_type_id'];
		$animalFodder->fodderTypeName = $row['fodder_type_name'];
		$animalFodder->fodderUnit = $row['fodder_unit'];
		$animalFodder->fodderCount = $row['fodder_count'];
		$animalFodder->fodderPrice = $row['fodder_price'];
		$animalFodder->farmId = $row['farm_id'];
		$animalFodder->fodderStatus = $row['fodder_status'];
		$animalFodder->createDate = $row['create_date'];
		$animalFodder->createTime = $row['create_time'];

		return $animalFodder;
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
	 * @return AnimalFodderMySql 
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
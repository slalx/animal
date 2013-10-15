<?php
/**
 * Class that operate on table 'animal_type'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2013-10-14 22:30
 */
class AnimalTypeMySqlDAO implements AnimalTypeDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AnimalTypeMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM animal_type WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM animal_type';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM animal_type ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param animalType primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM animal_type WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalTypeMySql animalType
 	 */
	public function insert($animalType){
		$sql = 'INSERT INTO animal_type (type_name, type_address, type_live, type_desc, type_date, anim_count, farm_id, create_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalType->typeName);
		$sqlQuery->set($animalType->typeAddress);
		$sqlQuery->set($animalType->typeLive);
		$sqlQuery->set($animalType->typeDesc);
		$sqlQuery->set($animalType->typeDate);
		$sqlQuery->set($animalType->animCount);
		$sqlQuery->set($animalType->farmId);
		$sqlQuery->set($animalType->createTime);

		$id = $this->executeInsert($sqlQuery);	
		$animalType->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalTypeMySql animalType
 	 */
	public function update($animalType){
		$sql = 'UPDATE animal_type SET type_name = ?, type_address = ?, type_live = ?, type_desc = ?, type_date = ?, anim_count = ?, farm_id = ?, create_time = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalType->typeName);
		$sqlQuery->set($animalType->typeAddress);
		$sqlQuery->set($animalType->typeLive);
		$sqlQuery->set($animalType->typeDesc);
		$sqlQuery->set($animalType->typeDate);
		$sqlQuery->set($animalType->animCount);
		$sqlQuery->set($animalType->farmId);
		$sqlQuery->set($animalType->createTime);

		$sqlQuery->set($animalType->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM animal_type';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTypeName($value){
		$sql = 'SELECT * FROM animal_type WHERE type_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTypeAddress($value){
		$sql = 'SELECT * FROM animal_type WHERE type_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTypeLive($value){
		$sql = 'SELECT * FROM animal_type WHERE type_live = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTypeDesc($value){
		$sql = 'SELECT * FROM animal_type WHERE type_desc = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTypeDate($value){
		$sql = 'SELECT * FROM animal_type WHERE type_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAnimCount($value){
		$sql = 'SELECT * FROM animal_type WHERE anim_count = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFarmId($value){
		$sql = 'SELECT * FROM animal_type WHERE farm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreateTime($value){
		$sql = 'SELECT * FROM animal_type WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTypeName($value){
		$sql = 'DELETE FROM animal_type WHERE type_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTypeAddress($value){
		$sql = 'DELETE FROM animal_type WHERE type_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTypeLive($value){
		$sql = 'DELETE FROM animal_type WHERE type_live = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTypeDesc($value){
		$sql = 'DELETE FROM animal_type WHERE type_desc = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTypeDate($value){
		$sql = 'DELETE FROM animal_type WHERE type_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAnimCount($value){
		$sql = 'DELETE FROM animal_type WHERE anim_count = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFarmId($value){
		$sql = 'DELETE FROM animal_type WHERE farm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreateTime($value){
		$sql = 'DELETE FROM animal_type WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AnimalTypeMySql 
	 */
	protected function readRow($row){
		$animalType = new AnimalType();
		
		$animalType->id = $row['id'];
		$animalType->typeName = $row['type_name'];
		$animalType->typeAddress = $row['type_address'];
		$animalType->typeLive = $row['type_live'];
		$animalType->typeDesc = $row['type_desc'];
		$animalType->typeDate = $row['type_date'];
		$animalType->animCount = $row['anim_count'];
		$animalType->farmId = $row['farm_id'];
		$animalType->createTime = $row['create_time'];

		return $animalType;
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
	 * @return AnimalTypeMySql 
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
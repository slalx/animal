<?php
/**
 * Class that operate on table 'animal_immune_log'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2013-10-08 16:22
 */
class AnimalImmuneLogMySqlDAO implements AnimalImmuneLogDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AnimalImmuneLogMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM animal_immune_log WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM animal_immune_log';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM animal_immune_log ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param animalImmuneLog primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM animal_immune_log WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalImmuneLogMySql animalImmuneLog
 	 */
	public function insert($animalImmuneLog){
		$sql = 'INSERT INTO animal_immune_log (veterinarian_id, drug_id, drug_count, drug_time, drug_area, farm_id, create_time) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalImmuneLog->veterinarianId);
		$sqlQuery->set($animalImmuneLog->drugId);
		$sqlQuery->set($animalImmuneLog->drugCount);
		$sqlQuery->set($animalImmuneLog->drugTime);
		$sqlQuery->set($animalImmuneLog->drugArea);
		$sqlQuery->set($animalImmuneLog->farmId);
		$sqlQuery->set($animalImmuneLog->createTime);

		$id = $this->executeInsert($sqlQuery);	
		$animalImmuneLog->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalImmuneLogMySql animalImmuneLog
 	 */
	public function update($animalImmuneLog){
		$sql = 'UPDATE animal_immune_log SET veterinarian_id = ?, drug_id = ?, drug_count = ?, drug_time = ?, drug_area = ?, farm_id = ?, create_time = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalImmuneLog->veterinarianId);
		$sqlQuery->set($animalImmuneLog->drugId);
		$sqlQuery->set($animalImmuneLog->drugCount);
		$sqlQuery->set($animalImmuneLog->drugTime);
		$sqlQuery->set($animalImmuneLog->drugArea);
		$sqlQuery->set($animalImmuneLog->farmId);
		$sqlQuery->set($animalImmuneLog->createTime);

		$sqlQuery->set($animalImmuneLog->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM animal_immune_log';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByVeterinarianId($value){
		$sql = 'SELECT * FROM animal_immune_log WHERE veterinarian_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDrugId($value){
		$sql = 'SELECT * FROM animal_immune_log WHERE drug_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDrugCount($value){
		$sql = 'SELECT * FROM animal_immune_log WHERE drug_count = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDrugTime($value){
		$sql = 'SELECT * FROM animal_immune_log WHERE drug_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDrugArea($value){
		$sql = 'SELECT * FROM animal_immune_log WHERE drug_area = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFarmId($value){
		$sql = 'SELECT * FROM animal_immune_log WHERE farm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreateTime($value){
		$sql = 'SELECT * FROM animal_immune_log WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByVeterinarianId($value){
		$sql = 'DELETE FROM animal_immune_log WHERE veterinarian_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDrugId($value){
		$sql = 'DELETE FROM animal_immune_log WHERE drug_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDrugCount($value){
		$sql = 'DELETE FROM animal_immune_log WHERE drug_count = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDrugTime($value){
		$sql = 'DELETE FROM animal_immune_log WHERE drug_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDrugArea($value){
		$sql = 'DELETE FROM animal_immune_log WHERE drug_area = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFarmId($value){
		$sql = 'DELETE FROM animal_immune_log WHERE farm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreateTime($value){
		$sql = 'DELETE FROM animal_immune_log WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AnimalImmuneLogMySql 
	 */
	protected function readRow($row){
		$animalImmuneLog = new AnimalImmuneLog();
		
		$animalImmuneLog->id = $row['id'];
		$animalImmuneLog->veterinarianId = $row['veterinarian_id'];
		$animalImmuneLog->drugId = $row['drug_id'];
		$animalImmuneLog->drugCount = $row['drug_count'];
		$animalImmuneLog->drugTime = $row['drug_time'];
		$animalImmuneLog->drugArea = $row['drug_area'];
		$animalImmuneLog->farmId = $row['farm_id'];
		$animalImmuneLog->createTime = $row['create_time'];

		return $animalImmuneLog;
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
	 * @return AnimalImmuneLogMySql 
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
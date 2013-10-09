<?php
/**
 * Class that operate on table 'animal_disinfect_log'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2013-10-08 16:22
 */
class AnimalDisinfectLogMySqlDAO implements AnimalDisinfectLogDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AnimalDisinfectLogMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM animal_disinfect_log WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM animal_disinfect_log';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM animal_disinfect_log ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param animalDisinfectLog primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM animal_disinfect_log WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalDisinfectLogMySql animalDisinfectLog
 	 */
	public function insert($animalDisinfectLog){
		$sql = 'INSERT INTO animal_disinfect_log (veterinarian_id, drug_id, drug_time, drug_area, farm_id, create_time) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalDisinfectLog->veterinarianId);
		$sqlQuery->set($animalDisinfectLog->drugId);
		$sqlQuery->set($animalDisinfectLog->drugTime);
		$sqlQuery->set($animalDisinfectLog->drugArea);
		$sqlQuery->set($animalDisinfectLog->farmId);
		$sqlQuery->set($animalDisinfectLog->createTime);

		$id = $this->executeInsert($sqlQuery);	
		$animalDisinfectLog->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalDisinfectLogMySql animalDisinfectLog
 	 */
	public function update($animalDisinfectLog){
		$sql = 'UPDATE animal_disinfect_log SET veterinarian_id = ?, drug_id = ?, drug_time = ?, drug_area = ?, farm_id = ?, create_time = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalDisinfectLog->veterinarianId);
		$sqlQuery->set($animalDisinfectLog->drugId);
		$sqlQuery->set($animalDisinfectLog->drugTime);
		$sqlQuery->set($animalDisinfectLog->drugArea);
		$sqlQuery->set($animalDisinfectLog->farmId);
		$sqlQuery->set($animalDisinfectLog->createTime);

		$sqlQuery->set($animalDisinfectLog->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM animal_disinfect_log';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByVeterinarianId($value){
		$sql = 'SELECT * FROM animal_disinfect_log WHERE veterinarian_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDrugId($value){
		$sql = 'SELECT * FROM animal_disinfect_log WHERE drug_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDrugTime($value){
		$sql = 'SELECT * FROM animal_disinfect_log WHERE drug_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDrugArea($value){
		$sql = 'SELECT * FROM animal_disinfect_log WHERE drug_area = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFarmId($value){
		$sql = 'SELECT * FROM animal_disinfect_log WHERE farm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreateTime($value){
		$sql = 'SELECT * FROM animal_disinfect_log WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByVeterinarianId($value){
		$sql = 'DELETE FROM animal_disinfect_log WHERE veterinarian_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDrugId($value){
		$sql = 'DELETE FROM animal_disinfect_log WHERE drug_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDrugTime($value){
		$sql = 'DELETE FROM animal_disinfect_log WHERE drug_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDrugArea($value){
		$sql = 'DELETE FROM animal_disinfect_log WHERE drug_area = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFarmId($value){
		$sql = 'DELETE FROM animal_disinfect_log WHERE farm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreateTime($value){
		$sql = 'DELETE FROM animal_disinfect_log WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AnimalDisinfectLogMySql 
	 */
	protected function readRow($row){
		$animalDisinfectLog = new AnimalDisinfectLog();
		
		$animalDisinfectLog->id = $row['id'];
		$animalDisinfectLog->veterinarianId = $row['veterinarian_id'];
		$animalDisinfectLog->drugId = $row['drug_id'];
		$animalDisinfectLog->drugTime = $row['drug_time'];
		$animalDisinfectLog->drugArea = $row['drug_area'];
		$animalDisinfectLog->farmId = $row['farm_id'];
		$animalDisinfectLog->createTime = $row['create_time'];

		return $animalDisinfectLog;
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
	 * @return AnimalDisinfectLogMySql 
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
<?php
/**
 * Class that operate on table 'animal_farm_timeline'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2013-10-16 22:39
 */
class AnimalFarmTimelineMySqlDAO implements AnimalFarmTimelineDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AnimalFarmTimelineMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM animal_farm_timeline WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM animal_farm_timeline';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM animal_farm_timeline ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param animalFarmTimeline primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM animal_farm_timeline WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalFarmTimelineMySql animalFarmTimeline
 	 */
	public function insert($animalFarmTimeline){
		$sql = 'INSERT INTO animal_farm_timeline (farm_log_event, farm_log_desc, form_log_date, createtime) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalFarmTimeline->farmLogEvent);
		$sqlQuery->set($animalFarmTimeline->farmLogDesc);
		$sqlQuery->set($animalFarmTimeline->formLogDate);
		$sqlQuery->set($animalFarmTimeline->createtime);

		$id = $this->executeInsert($sqlQuery);	
		$animalFarmTimeline->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalFarmTimelineMySql animalFarmTimeline
 	 */
	public function update($animalFarmTimeline){
		$sql = 'UPDATE animal_farm_timeline SET farm_log_event = ?, farm_log_desc = ?, form_log_date = ?, createtime = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalFarmTimeline->farmLogEvent);
		$sqlQuery->set($animalFarmTimeline->farmLogDesc);
		$sqlQuery->set($animalFarmTimeline->formLogDate);
		$sqlQuery->set($animalFarmTimeline->createtime);

		$sqlQuery->set($animalFarmTimeline->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM animal_farm_timeline';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByFarmLogEvent($value){
		$sql = 'SELECT * FROM animal_farm_timeline WHERE farm_log_event = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFarmLogDesc($value){
		$sql = 'SELECT * FROM animal_farm_timeline WHERE farm_log_desc = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFormLogDate($value){
		$sql = 'SELECT * FROM animal_farm_timeline WHERE form_log_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreatetime($value){
		$sql = 'SELECT * FROM animal_farm_timeline WHERE createtime = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByFarmLogEvent($value){
		$sql = 'DELETE FROM animal_farm_timeline WHERE farm_log_event = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFarmLogDesc($value){
		$sql = 'DELETE FROM animal_farm_timeline WHERE farm_log_desc = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFormLogDate($value){
		$sql = 'DELETE FROM animal_farm_timeline WHERE form_log_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreatetime($value){
		$sql = 'DELETE FROM animal_farm_timeline WHERE createtime = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AnimalFarmTimelineMySql 
	 */
	protected function readRow($row){
		$animalFarmTimeline = new AnimalFarmTimeline();
		
		$animalFarmTimeline->id = $row['id'];
		$animalFarmTimeline->farmLogEvent = $row['farm_log_event'];
		$animalFarmTimeline->farmLogDesc = $row['farm_log_desc'];
		$animalFarmTimeline->formLogDate = $row['form_log_date'];
		$animalFarmTimeline->createtime = $row['createtime'];

		return $animalFarmTimeline;
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
	 * @return AnimalFarmTimelineMySql 
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
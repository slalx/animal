<?php
/**
 * Class that operate on table 'animal_live_log'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2013-10-16 22:39
 */
class AnimalLiveLogMySqlDAO implements AnimalLiveLogDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AnimalLiveLogMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM animal_live_log WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM animal_live_log';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM animal_live_log ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param animalLiveLog primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM animal_live_log WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalLiveLogMySql animalLiveLog
 	 */
	public function insert($animalLiveLog){
		$sql = 'INSERT INTO animal_live_log (live_log_event, live_log_status, live_new_count, live_log_date, create_time) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalLiveLog->liveLogEvent);
		$sqlQuery->set($animalLiveLog->liveLogStatus);
		$sqlQuery->set($animalLiveLog->liveNewCount);
		$sqlQuery->set($animalLiveLog->liveLogDate);
		$sqlQuery->set($animalLiveLog->createTime);

		$id = $this->executeInsert($sqlQuery);	
		$animalLiveLog->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalLiveLogMySql animalLiveLog
 	 */
	public function update($animalLiveLog){
		$sql = 'UPDATE animal_live_log SET live_log_event = ?, live_log_status = ?, live_new_count = ?, live_log_date = ?, create_time = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalLiveLog->liveLogEvent);
		$sqlQuery->set($animalLiveLog->liveLogStatus);
		$sqlQuery->set($animalLiveLog->liveNewCount);
		$sqlQuery->set($animalLiveLog->liveLogDate);
		$sqlQuery->set($animalLiveLog->createTime);

		$sqlQuery->set($animalLiveLog->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM animal_live_log';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByLiveLogEvent($value){
		$sql = 'SELECT * FROM animal_live_log WHERE live_log_event = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLiveLogStatus($value){
		$sql = 'SELECT * FROM animal_live_log WHERE live_log_status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLiveNewCount($value){
		$sql = 'SELECT * FROM animal_live_log WHERE live_new_count = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLiveLogDate($value){
		$sql = 'SELECT * FROM animal_live_log WHERE live_log_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreateTime($value){
		$sql = 'SELECT * FROM animal_live_log WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByLiveLogEvent($value){
		$sql = 'DELETE FROM animal_live_log WHERE live_log_event = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLiveLogStatus($value){
		$sql = 'DELETE FROM animal_live_log WHERE live_log_status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLiveNewCount($value){
		$sql = 'DELETE FROM animal_live_log WHERE live_new_count = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLiveLogDate($value){
		$sql = 'DELETE FROM animal_live_log WHERE live_log_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreateTime($value){
		$sql = 'DELETE FROM animal_live_log WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AnimalLiveLogMySql 
	 */
	protected function readRow($row){
		$animalLiveLog = new AnimalLiveLog();
		
		$animalLiveLog->id = $row['id'];
		$animalLiveLog->liveLogEvent = $row['live_log_event'];
		$animalLiveLog->liveLogStatus = $row['live_log_status'];
		$animalLiveLog->liveNewCount = $row['live_new_count'];
		$animalLiveLog->liveLogDate = $row['live_log_date'];
		$animalLiveLog->createTime = $row['create_time'];

		return $animalLiveLog;
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
	 * @return AnimalLiveLogMySql 
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
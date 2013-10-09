<?php
/**
 * Class that operate on table 'animal_eartag'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2013-10-08 16:22
 */
class AnimalEartagMySqlDAO implements AnimalEartagDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AnimalEartagMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM animal_eartag WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM animal_eartag';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM animal_eartag ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param animalEartag primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM animal_eartag WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalEartagMySql animalEartag
 	 */
	public function insert($animalEartag){
		$sql = 'INSERT INTO animal_eartag (serialnumber, farm_id, create_time) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalEartag->serialnumber);
		$sqlQuery->set($animalEartag->farmId);
		$sqlQuery->set($animalEartag->createTime);

		$id = $this->executeInsert($sqlQuery);	
		$animalEartag->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalEartagMySql animalEartag
 	 */
	public function update($animalEartag){
		$sql = 'UPDATE animal_eartag SET serialnumber = ?, farm_id = ?, create_time = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalEartag->serialnumber);
		$sqlQuery->set($animalEartag->farmId);
		$sqlQuery->set($animalEartag->createTime);

		$sqlQuery->set($animalEartag->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM animal_eartag';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryBySerialnumber($value){
		$sql = 'SELECT * FROM animal_eartag WHERE serialnumber = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFarmId($value){
		$sql = 'SELECT * FROM animal_eartag WHERE farm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreateTime($value){
		$sql = 'SELECT * FROM animal_eartag WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteBySerialnumber($value){
		$sql = 'DELETE FROM animal_eartag WHERE serialnumber = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFarmId($value){
		$sql = 'DELETE FROM animal_eartag WHERE farm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreateTime($value){
		$sql = 'DELETE FROM animal_eartag WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AnimalEartagMySql 
	 */
	protected function readRow($row){
		$animalEartag = new AnimalEartag();
		
		$animalEartag->id = $row['id'];
		$animalEartag->serialnumber = $row['serialnumber'];
		$animalEartag->farmId = $row['farm_id'];
		$animalEartag->createTime = $row['create_time'];

		return $animalEartag;
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
	 * @return AnimalEartagMySql 
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
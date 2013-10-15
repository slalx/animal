<?php
/**
 * Class that operate on table 'animal_peng'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2013-10-14 22:30
 */
class AnimalPengMySqlDAO implements AnimalPengDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AnimalPengMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM animal_peng WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM animal_peng';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM animal_peng ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param animalPeng primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM animal_peng WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalPengMySql animalPeng
 	 */
	public function insert($animalPeng){
		$sql = 'INSERT INTO animal_peng (serialnumber, peng_name, farm_id, create_time) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalPeng->serialnumber);
		$sqlQuery->set($animalPeng->pengName);
		$sqlQuery->set($animalPeng->farmId);
		$sqlQuery->set($animalPeng->createTime);

		$id = $this->executeInsert($sqlQuery);	
		$animalPeng->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalPengMySql animalPeng
 	 */
	public function update($animalPeng){
		$sql = 'UPDATE animal_peng SET serialnumber = ?, peng_name = ?, farm_id = ?, create_time = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalPeng->serialnumber);
		$sqlQuery->set($animalPeng->pengName);
		$sqlQuery->set($animalPeng->farmId);
		$sqlQuery->set($animalPeng->createTime);

		$sqlQuery->set($animalPeng->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM animal_peng';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryBySerialnumber($value){
		$sql = 'SELECT * FROM animal_peng WHERE serialnumber = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPengName($value){
		$sql = 'SELECT * FROM animal_peng WHERE peng_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFarmId($value){
		$sql = 'SELECT * FROM animal_peng WHERE farm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreateTime($value){
		$sql = 'SELECT * FROM animal_peng WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteBySerialnumber($value){
		$sql = 'DELETE FROM animal_peng WHERE serialnumber = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPengName($value){
		$sql = 'DELETE FROM animal_peng WHERE peng_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFarmId($value){
		$sql = 'DELETE FROM animal_peng WHERE farm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreateTime($value){
		$sql = 'DELETE FROM animal_peng WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AnimalPengMySql 
	 */
	protected function readRow($row){
		$animalPeng = new AnimalPeng();
		
		$animalPeng->id = $row['id'];
		$animalPeng->serialnumber = $row['serialnumber'];
		$animalPeng->pengName = $row['peng_name'];
		$animalPeng->farmId = $row['farm_id'];
		$animalPeng->createTime = $row['create_time'];

		return $animalPeng;
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
	 * @return AnimalPengMySql 
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
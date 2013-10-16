<?php
/**
 * Class that operate on table 'animal_juan'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2013-10-16 22:39
 */
class AnimalJuanMySqlDAO implements AnimalJuanDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AnimalJuanMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM animal_juan WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM animal_juan';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM animal_juan ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param animalJuan primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM animal_juan WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalJuanMySql animalJuan
 	 */
	public function insert($animalJuan){
		$sql = 'INSERT INTO animal_juan (juan_name, juan_serialnumber, animal_farm_id, animal_peng_id, create_time) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalJuan->juanName);
		$sqlQuery->set($animalJuan->juanSerialnumber);
		$sqlQuery->set($animalJuan->animalFarmId);
		$sqlQuery->set($animalJuan->animalPengId);
		$sqlQuery->set($animalJuan->createTime);

		$id = $this->executeInsert($sqlQuery);	
		$animalJuan->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalJuanMySql animalJuan
 	 */
	public function update($animalJuan){
		$sql = 'UPDATE animal_juan SET juan_name = ?, juan_serialnumber = ?, animal_farm_id = ?, animal_peng_id = ?, create_time = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalJuan->juanName);
		$sqlQuery->set($animalJuan->juanSerialnumber);
		$sqlQuery->set($animalJuan->animalFarmId);
		$sqlQuery->set($animalJuan->animalPengId);
		$sqlQuery->set($animalJuan->createTime);

		$sqlQuery->set($animalJuan->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM animal_juan';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByJuanName($value){
		$sql = 'SELECT * FROM animal_juan WHERE juan_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByJuanSerialnumber($value){
		$sql = 'SELECT * FROM animal_juan WHERE juan_serialnumber = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAnimalFarmId($value){
		$sql = 'SELECT * FROM animal_juan WHERE animal_farm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAnimalPengId($value){
		$sql = 'SELECT * FROM animal_juan WHERE animal_peng_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreateTime($value){
		$sql = 'SELECT * FROM animal_juan WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByJuanName($value){
		$sql = 'DELETE FROM animal_juan WHERE juan_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByJuanSerialnumber($value){
		$sql = 'DELETE FROM animal_juan WHERE juan_serialnumber = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAnimalFarmId($value){
		$sql = 'DELETE FROM animal_juan WHERE animal_farm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAnimalPengId($value){
		$sql = 'DELETE FROM animal_juan WHERE animal_peng_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreateTime($value){
		$sql = 'DELETE FROM animal_juan WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AnimalJuanMySql 
	 */
	protected function readRow($row){
		$animalJuan = new AnimalJuan();
		
		$animalJuan->id = $row['id'];
		$animalJuan->juanName = $row['juan_name'];
		$animalJuan->juanSerialnumber = $row['juan_serialnumber'];
		$animalJuan->animalFarmId = $row['animal_farm_id'];
		$animalJuan->animalPengId = $row['animal_peng_id'];
		$animalJuan->createTime = $row['create_time'];

		return $animalJuan;
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
	 * @return AnimalJuanMySql 
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
<?php
/**
 * Class that operate on table 'animal_farm'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2013-10-16 22:39
 */
class AnimalFarmMySqlDAO implements AnimalFarmDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AnimalFarmMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM animal_farm WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM animal_farm';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM animal_farm ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param animalFarm primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM animal_farm WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalFarmMySql animalFarm
 	 */
	public function insert($animalFarm){
		$sql = 'INSERT INTO animal_farm (farm_telephone, farm_legalperson, farm_name, farm_address, farm_password, create_time) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalFarm->farmTelephone);
		$sqlQuery->set($animalFarm->farmLegalperson);
		$sqlQuery->set($animalFarm->farmName);
		$sqlQuery->set($animalFarm->farmAddress);
		$sqlQuery->set($animalFarm->farmPassword);
		$sqlQuery->set($animalFarm->createTime);

		$id = $this->executeInsert($sqlQuery);	
		$animalFarm->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalFarmMySql animalFarm
 	 */
	public function update($animalFarm){
		$sql = 'UPDATE animal_farm SET farm_telephone = ?, farm_legalperson = ?, farm_name = ?, farm_address = ?, farm_password = ?, create_time = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalFarm->farmTelephone);
		$sqlQuery->set($animalFarm->farmLegalperson);
		$sqlQuery->set($animalFarm->farmName);
		$sqlQuery->set($animalFarm->farmAddress);
		$sqlQuery->set($animalFarm->farmPassword);
		$sqlQuery->set($animalFarm->createTime);

		$sqlQuery->set($animalFarm->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM animal_farm';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByFarmTelephone($value){
		$sql = 'SELECT * FROM animal_farm WHERE farm_telephone = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFarmLegalperson($value){
		$sql = 'SELECT * FROM animal_farm WHERE farm_legalperson = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFarmName($value){
		$sql = 'SELECT * FROM animal_farm WHERE farm_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFarmAddress($value){
		$sql = 'SELECT * FROM animal_farm WHERE farm_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFarmPassword($value){
		$sql = 'SELECT * FROM animal_farm WHERE farm_password = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreateTime($value){
		$sql = 'SELECT * FROM animal_farm WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByFarmTelephone($value){
		$sql = 'DELETE FROM animal_farm WHERE farm_telephone = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFarmLegalperson($value){
		$sql = 'DELETE FROM animal_farm WHERE farm_legalperson = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFarmName($value){
		$sql = 'DELETE FROM animal_farm WHERE farm_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFarmAddress($value){
		$sql = 'DELETE FROM animal_farm WHERE farm_address = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFarmPassword($value){
		$sql = 'DELETE FROM animal_farm WHERE farm_password = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreateTime($value){
		$sql = 'DELETE FROM animal_farm WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AnimalFarmMySql 
	 */
	protected function readRow($row){
		$animalFarm = new AnimalFarm();
		
		$animalFarm->id = $row['id'];
		$animalFarm->farmTelephone = $row['farm_telephone'];
		$animalFarm->farmLegalperson = $row['farm_legalperson'];
		$animalFarm->farmName = $row['farm_name'];
		$animalFarm->farmAddress = $row['farm_address'];
		$animalFarm->farmPassword = $row['farm_password'];
		$animalFarm->createTime = $row['create_time'];

		return $animalFarm;
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
	 * @return AnimalFarmMySql 
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
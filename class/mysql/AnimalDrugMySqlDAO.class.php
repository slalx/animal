<?php
/**
 * Class that operate on table 'animal_drug'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2013-10-16 22:39
 */
class AnimalDrugMySqlDAO implements AnimalDrugDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AnimalDrugMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM animal_drug WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM animal_drug';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM animal_drug ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param animalDrug primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM animal_drug WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalDrugMySql animalDrug
 	 */
	public function insert($animalDrug){
		$sql = 'INSERT INTO animal_drug (drug_type_id, drug_type_name, drug_count, drug_status, farm_id, create_time) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalDrug->drugTypeId);
		$sqlQuery->set($animalDrug->drugTypeName);
		$sqlQuery->set($animalDrug->drugCount);
		$sqlQuery->setNumber($animalDrug->drugStatus);
		$sqlQuery->set($animalDrug->farmId);
		$sqlQuery->set($animalDrug->createTime);

		$id = $this->executeInsert($sqlQuery);	
		$animalDrug->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalDrugMySql animalDrug
 	 */
	public function update($animalDrug){
		$sql = 'UPDATE animal_drug SET drug_type_id = ?, drug_type_name = ?, drug_count = ?, drug_status = ?, farm_id = ?, create_time = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalDrug->drugTypeId);
		$sqlQuery->set($animalDrug->drugTypeName);
		$sqlQuery->set($animalDrug->drugCount);
		$sqlQuery->setNumber($animalDrug->drugStatus);
		$sqlQuery->set($animalDrug->farmId);
		$sqlQuery->set($animalDrug->createTime);

		$sqlQuery->set($animalDrug->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM animal_drug';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByDrugTypeId($value){
		$sql = 'SELECT * FROM animal_drug WHERE drug_type_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDrugTypeName($value){
		$sql = 'SELECT * FROM animal_drug WHERE drug_type_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDrugCount($value){
		$sql = 'SELECT * FROM animal_drug WHERE drug_count = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDrugStatus($value){
		$sql = 'SELECT * FROM animal_drug WHERE drug_status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFarmId($value){
		$sql = 'SELECT * FROM animal_drug WHERE farm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreateTime($value){
		$sql = 'SELECT * FROM animal_drug WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByDrugTypeId($value){
		$sql = 'DELETE FROM animal_drug WHERE drug_type_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDrugTypeName($value){
		$sql = 'DELETE FROM animal_drug WHERE drug_type_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDrugCount($value){
		$sql = 'DELETE FROM animal_drug WHERE drug_count = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDrugStatus($value){
		$sql = 'DELETE FROM animal_drug WHERE drug_status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFarmId($value){
		$sql = 'DELETE FROM animal_drug WHERE farm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreateTime($value){
		$sql = 'DELETE FROM animal_drug WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AnimalDrugMySql 
	 */
	protected function readRow($row){
		$animalDrug = new AnimalDrug();
		
		$animalDrug->id = $row['id'];
		$animalDrug->drugTypeId = $row['drug_type_id'];
		$animalDrug->drugTypeName = $row['drug_type_name'];
		$animalDrug->drugCount = $row['drug_count'];
		$animalDrug->drugStatus = $row['drug_status'];
		$animalDrug->farmId = $row['farm_id'];
		$animalDrug->createTime = $row['create_time'];

		return $animalDrug;
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
	 * @return AnimalDrugMySql 
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
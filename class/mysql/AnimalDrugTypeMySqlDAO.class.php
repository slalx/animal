<?php
/**
 * Class that operate on table 'animal_drug_type'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2013-10-16 22:39
 */
class AnimalDrugTypeMySqlDAO implements AnimalDrugTypeDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AnimalDrugTypeMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM animal_drug_type WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM animal_drug_type';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM animal_drug_type ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param animalDrugType primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM animal_drug_type WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalDrugTypeMySql animalDrugType
 	 */
	public function insert($animalDrugType){
		$sql = 'INSERT INTO animal_drug_type (drug_name, drug_count, drug_price, drug_source, drag_desc, farm_id, create_time) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalDrugType->drugName);
		$sqlQuery->set($animalDrugType->drugCount);
		$sqlQuery->set($animalDrugType->drugPrice);
		$sqlQuery->set($animalDrugType->drugSource);
		$sqlQuery->set($animalDrugType->dragDesc);
		$sqlQuery->set($animalDrugType->farmId);
		$sqlQuery->set($animalDrugType->createTime);

		$id = $this->executeInsert($sqlQuery);	
		$animalDrugType->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalDrugTypeMySql animalDrugType
 	 */
	public function update($animalDrugType){
		$sql = 'UPDATE animal_drug_type SET drug_name = ?, drug_count = ?, drug_price = ?, drug_source = ?, drag_desc = ?, farm_id = ?, create_time = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalDrugType->drugName);
		$sqlQuery->set($animalDrugType->drugCount);
		$sqlQuery->set($animalDrugType->drugPrice);
		$sqlQuery->set($animalDrugType->drugSource);
		$sqlQuery->set($animalDrugType->dragDesc);
		$sqlQuery->set($animalDrugType->farmId);
		$sqlQuery->set($animalDrugType->createTime);

		$sqlQuery->set($animalDrugType->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM animal_drug_type';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByDrugName($value){
		$sql = 'SELECT * FROM animal_drug_type WHERE drug_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDrugCount($value){
		$sql = 'SELECT * FROM animal_drug_type WHERE drug_count = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDrugPrice($value){
		$sql = 'SELECT * FROM animal_drug_type WHERE drug_price = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDrugSource($value){
		$sql = 'SELECT * FROM animal_drug_type WHERE drug_source = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDragDesc($value){
		$sql = 'SELECT * FROM animal_drug_type WHERE drag_desc = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFarmId($value){
		$sql = 'SELECT * FROM animal_drug_type WHERE farm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreateTime($value){
		$sql = 'SELECT * FROM animal_drug_type WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByDrugName($value){
		$sql = 'DELETE FROM animal_drug_type WHERE drug_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDrugCount($value){
		$sql = 'DELETE FROM animal_drug_type WHERE drug_count = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDrugPrice($value){
		$sql = 'DELETE FROM animal_drug_type WHERE drug_price = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDrugSource($value){
		$sql = 'DELETE FROM animal_drug_type WHERE drug_source = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDragDesc($value){
		$sql = 'DELETE FROM animal_drug_type WHERE drag_desc = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFarmId($value){
		$sql = 'DELETE FROM animal_drug_type WHERE farm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreateTime($value){
		$sql = 'DELETE FROM animal_drug_type WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AnimalDrugTypeMySql 
	 */
	protected function readRow($row){
		$animalDrugType = new AnimalDrugType();
		
		$animalDrugType->id = $row['id'];
		$animalDrugType->drugName = $row['drug_name'];
		$animalDrugType->drugCount = $row['drug_count'];
		$animalDrugType->drugPrice = $row['drug_price'];
		$animalDrugType->drugSource = $row['drug_source'];
		$animalDrugType->dragDesc = $row['drag_desc'];
		$animalDrugType->farmId = $row['farm_id'];
		$animalDrugType->createTime = $row['create_time'];

		return $animalDrugType;
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
	 * @return AnimalDrugTypeMySql 
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
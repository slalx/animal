<?php
/**
 * Class that operate on table 'animal_one'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2013-10-16 22:39
 */
class AnimalOneMySqlDAO implements AnimalOneDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AnimalOneMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM animal_one WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM animal_one';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM animal_one ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param animalOne primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM animal_one WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalOneMySql animalOne
 	 */
	public function insert($animalOne){
		$sql = 'INSERT INTO animal_one (serialnumber, gender, birthday, father_type, mother_type, father_serialnumber, mother_serialnumber, come_in_addr, go_out_addr, come_in_date, go_out_date, peng_id, juan_id, farm_id, create_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalOne->serialnumber);
		$sqlQuery->setNumber($animalOne->gender);
		$sqlQuery->set($animalOne->birthday);
		$sqlQuery->set($animalOne->fatherType);
		$sqlQuery->set($animalOne->motherType);
		$sqlQuery->set($animalOne->fatherSerialnumber);
		$sqlQuery->set($animalOne->motherSerialnumber);
		$sqlQuery->set($animalOne->comeInAddr);
		$sqlQuery->set($animalOne->goOutAddr);
		$sqlQuery->set($animalOne->comeInDate);
		$sqlQuery->set($animalOne->goOutDate);
		$sqlQuery->set($animalOne->pengId);
		$sqlQuery->set($animalOne->juanId);
		$sqlQuery->set($animalOne->farmId);
		$sqlQuery->set($animalOne->createTime);

		$id = $this->executeInsert($sqlQuery);	
		$animalOne->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalOneMySql animalOne
 	 */
	public function update($animalOne){
		$sql = 'UPDATE animal_one SET serialnumber = ?, gender = ?, birthday = ?, father_type = ?, mother_type = ?, father_serialnumber = ?, mother_serialnumber = ?, come_in_addr = ?, go_out_addr = ?, come_in_date = ?, go_out_date = ?, peng_id = ?, juan_id = ?, farm_id = ?, create_time = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($animalOne->serialnumber);
		$sqlQuery->setNumber($animalOne->gender);
		$sqlQuery->set($animalOne->birthday);
		$sqlQuery->set($animalOne->fatherType);
		$sqlQuery->set($animalOne->motherType);
		$sqlQuery->set($animalOne->fatherSerialnumber);
		$sqlQuery->set($animalOne->motherSerialnumber);
		$sqlQuery->set($animalOne->comeInAddr);
		$sqlQuery->set($animalOne->goOutAddr);
		$sqlQuery->set($animalOne->comeInDate);
		$sqlQuery->set($animalOne->goOutDate);
		$sqlQuery->set($animalOne->pengId);
		$sqlQuery->set($animalOne->juanId);
		$sqlQuery->set($animalOne->farmId);
		$sqlQuery->set($animalOne->createTime);

		$sqlQuery->set($animalOne->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM animal_one';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryBySerialnumber($value){
		$sql = 'SELECT * FROM animal_one WHERE serialnumber = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGender($value){
		$sql = 'SELECT * FROM animal_one WHERE gender = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBirthday($value){
		$sql = 'SELECT * FROM animal_one WHERE birthday = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFatherType($value){
		$sql = 'SELECT * FROM animal_one WHERE father_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMotherType($value){
		$sql = 'SELECT * FROM animal_one WHERE mother_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFatherSerialnumber($value){
		$sql = 'SELECT * FROM animal_one WHERE father_serialnumber = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMotherSerialnumber($value){
		$sql = 'SELECT * FROM animal_one WHERE mother_serialnumber = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByComeInAddr($value){
		$sql = 'SELECT * FROM animal_one WHERE come_in_addr = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGoOutAddr($value){
		$sql = 'SELECT * FROM animal_one WHERE go_out_addr = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByComeInDate($value){
		$sql = 'SELECT * FROM animal_one WHERE come_in_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGoOutDate($value){
		$sql = 'SELECT * FROM animal_one WHERE go_out_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPengId($value){
		$sql = 'SELECT * FROM animal_one WHERE peng_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByJuanId($value){
		$sql = 'SELECT * FROM animal_one WHERE juan_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFarmId($value){
		$sql = 'SELECT * FROM animal_one WHERE farm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreateTime($value){
		$sql = 'SELECT * FROM animal_one WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteBySerialnumber($value){
		$sql = 'DELETE FROM animal_one WHERE serialnumber = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGender($value){
		$sql = 'DELETE FROM animal_one WHERE gender = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBirthday($value){
		$sql = 'DELETE FROM animal_one WHERE birthday = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFatherType($value){
		$sql = 'DELETE FROM animal_one WHERE father_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMotherType($value){
		$sql = 'DELETE FROM animal_one WHERE mother_type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFatherSerialnumber($value){
		$sql = 'DELETE FROM animal_one WHERE father_serialnumber = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMotherSerialnumber($value){
		$sql = 'DELETE FROM animal_one WHERE mother_serialnumber = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByComeInAddr($value){
		$sql = 'DELETE FROM animal_one WHERE come_in_addr = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGoOutAddr($value){
		$sql = 'DELETE FROM animal_one WHERE go_out_addr = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByComeInDate($value){
		$sql = 'DELETE FROM animal_one WHERE come_in_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGoOutDate($value){
		$sql = 'DELETE FROM animal_one WHERE go_out_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPengId($value){
		$sql = 'DELETE FROM animal_one WHERE peng_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByJuanId($value){
		$sql = 'DELETE FROM animal_one WHERE juan_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFarmId($value){
		$sql = 'DELETE FROM animal_one WHERE farm_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreateTime($value){
		$sql = 'DELETE FROM animal_one WHERE create_time = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AnimalOneMySql 
	 */
	protected function readRow($row){
		$animalOne = new AnimalOne();
		
		$animalOne->id = $row['id'];
		$animalOne->serialnumber = $row['serialnumber'];
		$animalOne->gender = $row['gender'];
		$animalOne->birthday = $row['birthday'];
		$animalOne->fatherType = $row['father_type'];
		$animalOne->motherType = $row['mother_type'];
		$animalOne->fatherSerialnumber = $row['father_serialnumber'];
		$animalOne->motherSerialnumber = $row['mother_serialnumber'];
		$animalOne->comeInAddr = $row['come_in_addr'];
		$animalOne->goOutAddr = $row['go_out_addr'];
		$animalOne->comeInDate = $row['come_in_date'];
		$animalOne->goOutDate = $row['go_out_date'];
		$animalOne->pengId = $row['peng_id'];
		$animalOne->juanId = $row['juan_id'];
		$animalOne->farmId = $row['farm_id'];
		$animalOne->createTime = $row['create_time'];

		return $animalOne;
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
	 * @return AnimalOneMySql 
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
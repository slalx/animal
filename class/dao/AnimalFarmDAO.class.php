<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-08 16:22
 */
interface AnimalFarmDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AnimalFarm 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param animalFarm primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalFarm animalFarm
 	 */
	public function insert($animalFarm);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalFarm animalFarm
 	 */
	public function update($animalFarm);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTelephone($value);

	public function queryByLegalperson($value);

	public function queryByName($value);

	public function queryByAddress($value);

	public function queryByPassword($value);

	public function queryByCreateTime($value);


	public function deleteByTelephone($value);

	public function deleteByLegalperson($value);

	public function deleteByName($value);

	public function deleteByAddress($value);

	public function deleteByPassword($value);

	public function deleteByCreateTime($value);


}
?>
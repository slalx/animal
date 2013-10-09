<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-08 16:22
 */
interface AnimalTypeDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AnimalType 
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
 	 * @param animalType primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalType animalType
 	 */
	public function insert($animalType);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalType animalType
 	 */
	public function update($animalType);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByName($value);

	public function queryByAnimCount($value);

	public function queryByAnimFarmId($value);

	public function queryByCreateTime($value);


	public function deleteByName($value);

	public function deleteByAnimCount($value);

	public function deleteByAnimFarmId($value);

	public function deleteByCreateTime($value);


}
?>
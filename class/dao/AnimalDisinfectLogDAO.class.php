<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-16 22:39
 */
interface AnimalDisinfectLogDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AnimalDisinfectLog 
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
 	 * @param animalDisinfectLog primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalDisinfectLog animalDisinfectLog
 	 */
	public function insert($animalDisinfectLog);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalDisinfectLog animalDisinfectLog
 	 */
	public function update($animalDisinfectLog);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByVeterinarianId($value);

	public function queryByDrugId($value);

	public function queryByDrugTime($value);

	public function queryByDrugArea($value);

	public function queryByFarmId($value);

	public function queryByCreateTime($value);


	public function deleteByVeterinarianId($value);

	public function deleteByDrugId($value);

	public function deleteByDrugTime($value);

	public function deleteByDrugArea($value);

	public function deleteByFarmId($value);

	public function deleteByCreateTime($value);


}
?>
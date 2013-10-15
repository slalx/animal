<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-14 22:30
 */
interface AnimalImmuneLogDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AnimalImmuneLog 
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
 	 * @param animalImmuneLog primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalImmuneLog animalImmuneLog
 	 */
	public function insert($animalImmuneLog);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalImmuneLog animalImmuneLog
 	 */
	public function update($animalImmuneLog);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByVeterinarianId($value);

	public function queryByDrugId($value);

	public function queryByDrugCount($value);

	public function queryByDrugTime($value);

	public function queryByDrugArea($value);

	public function queryByFarmId($value);

	public function queryByCreateTime($value);


	public function deleteByVeterinarianId($value);

	public function deleteByDrugId($value);

	public function deleteByDrugCount($value);

	public function deleteByDrugTime($value);

	public function deleteByDrugArea($value);

	public function deleteByFarmId($value);

	public function deleteByCreateTime($value);


}
?>
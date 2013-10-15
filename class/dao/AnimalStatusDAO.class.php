<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-14 22:30
 */
interface AnimalStatusDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AnimalStatus 
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
 	 * @param animalStatu primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalStatus animalStatu
 	 */
	public function insert($animalStatu);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalStatus animalStatu
 	 */
	public function update($animalStatu);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByName($value);

	public function queryByFarmId($value);

	public function queryByCreateTime($value);


	public function deleteByName($value);

	public function deleteByFarmId($value);

	public function deleteByCreateTime($value);


}
?>
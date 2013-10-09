<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-08 16:22
 */
interface AnimalVeterinarianDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AnimalVeterinarian 
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
 	 * @param animalVeterinarian primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalVeterinarian animalVeterinarian
 	 */
	public function insert($animalVeterinarian);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalVeterinarian animalVeterinarian
 	 */
	public function update($animalVeterinarian);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByName($value);

	public function queryByTelephone($value);

	public function queryByFarmId($value);

	public function queryByCreateTime($value);


	public function deleteByName($value);

	public function deleteByTelephone($value);

	public function deleteByFarmId($value);

	public function deleteByCreateTime($value);


}
?>
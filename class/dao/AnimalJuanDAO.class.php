<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-16 22:39
 */
interface AnimalJuanDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AnimalJuan 
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
 	 * @param animalJuan primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalJuan animalJuan
 	 */
	public function insert($animalJuan);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalJuan animalJuan
 	 */
	public function update($animalJuan);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByJuanName($value);

	public function queryByJuanSerialnumber($value);

	public function queryByAnimalFarmId($value);

	public function queryByAnimalPengId($value);

	public function queryByCreateTime($value);


	public function deleteByJuanName($value);

	public function deleteByJuanSerialnumber($value);

	public function deleteByAnimalFarmId($value);

	public function deleteByAnimalPengId($value);

	public function deleteByCreateTime($value);


}
?>
<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-08 16:22
 */
interface AnimalPengDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AnimalPeng 
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
 	 * @param animalPeng primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalPeng animalPeng
 	 */
	public function insert($animalPeng);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalPeng animalPeng
 	 */
	public function update($animalPeng);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryBySerialnumber($value);

	public function queryByName($value);

	public function queryByFarmId($value);

	public function queryByCreateTime($value);


	public function deleteBySerialnumber($value);

	public function deleteByName($value);

	public function deleteByFarmId($value);

	public function deleteByCreateTime($value);


}
?>
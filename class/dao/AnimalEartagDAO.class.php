<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-08 16:22
 */
interface AnimalEartagDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AnimalEartag 
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
 	 * @param animalEartag primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalEartag animalEartag
 	 */
	public function insert($animalEartag);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalEartag animalEartag
 	 */
	public function update($animalEartag);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryBySerialnumber($value);

	public function queryByFarmId($value);

	public function queryByCreateTime($value);


	public function deleteBySerialnumber($value);

	public function deleteByFarmId($value);

	public function deleteByCreateTime($value);


}
?>
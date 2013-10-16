<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-16 22:39
 */
interface AnimalFodderTypeDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AnimalFodderType 
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
 	 * @param animalFodderType primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalFodderType animalFodderType
 	 */
	public function insert($animalFodderType);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalFodderType animalFodderType
 	 */
	public function update($animalFodderType);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByFoddertypeName($value);

	public function queryByCreateTime($value);


	public function deleteByFoddertypeName($value);

	public function deleteByCreateTime($value);


}
?>
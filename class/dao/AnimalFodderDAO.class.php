<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-14 22:30
 */
interface AnimalFodderDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AnimalFodder 
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
 	 * @param animalFodder primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalFodder animalFodder
 	 */
	public function insert($animalFodder);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalFodder animalFodder
 	 */
	public function update($animalFodder);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByFodderTypeId($value);

	public function queryByFodderTypeName($value);

	public function queryByFodderAdditive($value);

	public function queryByFodderCount($value);

	public function queryByFodderPrice($value);

	public function queryByFarmId($value);

	public function queryByFodderStatus($value);

	public function queryByCreateTime($value);


	public function deleteByFodderTypeId($value);

	public function deleteByFodderTypeName($value);

	public function deleteByFodderAdditive($value);

	public function deleteByFodderCount($value);

	public function deleteByFodderPrice($value);

	public function deleteByFarmId($value);

	public function deleteByFodderStatus($value);

	public function deleteByCreateTime($value);


}
?>
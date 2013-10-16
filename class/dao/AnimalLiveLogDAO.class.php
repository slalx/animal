<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-16 22:39
 */
interface AnimalLiveLogDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AnimalLiveLog 
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
 	 * @param animalLiveLog primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalLiveLog animalLiveLog
 	 */
	public function insert($animalLiveLog);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalLiveLog animalLiveLog
 	 */
	public function update($animalLiveLog);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByLiveLogEvent($value);

	public function queryByLiveLogStatus($value);

	public function queryByLiveNewCount($value);

	public function queryByLiveLogDate($value);

	public function queryByCreateTime($value);


	public function deleteByLiveLogEvent($value);

	public function deleteByLiveLogStatus($value);

	public function deleteByLiveNewCount($value);

	public function deleteByLiveLogDate($value);

	public function deleteByCreateTime($value);


}
?>
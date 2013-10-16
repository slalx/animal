<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-16 22:39
 */
interface AnimalFarmTimelineDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AnimalFarmTimeline 
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
 	 * @param animalFarmTimeline primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalFarmTimeline animalFarmTimeline
 	 */
	public function insert($animalFarmTimeline);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalFarmTimeline animalFarmTimeline
 	 */
	public function update($animalFarmTimeline);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByFarmLogEvent($value);

	public function queryByFarmLogDesc($value);

	public function queryByFormLogDate($value);

	public function queryByCreatetime($value);


	public function deleteByFarmLogEvent($value);

	public function deleteByFarmLogDesc($value);

	public function deleteByFormLogDate($value);

	public function deleteByCreatetime($value);


}
?>
<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-14 22:30
 */
interface AnimalTypeDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AnimalType 
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
 	 * @param animalType primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalType animalType
 	 */
	public function insert($animalType);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalType animalType
 	 */
	public function update($animalType);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTypeName($value);

	public function queryByTypeAddress($value);

	public function queryByTypeLive($value);

	public function queryByTypeDesc($value);

	public function queryByTypeDate($value);

	public function queryByAnimCount($value);

	public function queryByFarmId($value);

	public function queryByCreateTime($value);


	public function deleteByTypeName($value);

	public function deleteByTypeAddress($value);

	public function deleteByTypeLive($value);

	public function deleteByTypeDesc($value);

	public function deleteByTypeDate($value);

	public function deleteByAnimCount($value);

	public function deleteByFarmId($value);

	public function deleteByCreateTime($value);


}
?>
<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-14 22:30
 */
interface AnimalFarmDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AnimalFarm 
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
 	 * @param animalFarm primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalFarm animalFarm
 	 */
	public function insert($animalFarm);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalFarm animalFarm
 	 */
	public function update($animalFarm);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByFarmTelephone($value);

	public function queryByFarmLegalperson($value);

	public function queryByFarmName($value);

	public function queryByFarmAddress($value);

	public function queryByFarmPassword($value);

	public function queryByCreateTime($value);


	public function deleteByFarmTelephone($value);

	public function deleteByFarmLegalperson($value);

	public function deleteByFarmName($value);

	public function deleteByFarmAddress($value);

	public function deleteByFarmPassword($value);

	public function deleteByCreateTime($value);


}
?>
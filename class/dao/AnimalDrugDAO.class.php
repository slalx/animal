<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-16 22:39
 */
interface AnimalDrugDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AnimalDrug 
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
 	 * @param animalDrug primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalDrug animalDrug
 	 */
	public function insert($animalDrug);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalDrug animalDrug
 	 */
	public function update($animalDrug);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByDrugTypeId($value);

	public function queryByDrugTypeName($value);

	public function queryByDrugCount($value);

	public function queryByDrugStatus($value);

	public function queryByFarmId($value);

	public function queryByCreateTime($value);


	public function deleteByDrugTypeId($value);

	public function deleteByDrugTypeName($value);

	public function deleteByDrugCount($value);

	public function deleteByDrugStatus($value);

	public function deleteByFarmId($value);

	public function deleteByCreateTime($value);


}
?>
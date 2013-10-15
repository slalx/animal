<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-14 22:30
 */
interface AnimalDrugTypeDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AnimalDrugType 
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
 	 * @param animalDrugType primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalDrugType animalDrugType
 	 */
	public function insert($animalDrugType);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalDrugType animalDrugType
 	 */
	public function update($animalDrugType);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByDrugName($value);

	public function queryByDrugCount($value);

	public function queryByDrugPrice($value);

	public function queryByDrugSource($value);

	public function queryByDragDesc($value);

	public function queryByFarmId($value);

	public function queryByCreateTime($value);


	public function deleteByDrugName($value);

	public function deleteByDrugCount($value);

	public function deleteByDrugPrice($value);

	public function deleteByDrugSource($value);

	public function deleteByDragDesc($value);

	public function deleteByFarmId($value);

	public function deleteByCreateTime($value);


}
?>
<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-16 22:39
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

	public function queryByJuanName($value);

	public function queryByJuanId($value);

	public function queryByPengName($value);

	public function queryByPengId($value);

	public function queryByTypeName($value);

	public function queryByTypeId($value);

	public function queryByFarmName($value);

	public function queryByFarmId($value);

	public function queryByCreateTime($value);


	public function deleteBySerialnumber($value);

	public function deleteByJuanName($value);

	public function deleteByJuanId($value);

	public function deleteByPengName($value);

	public function deleteByPengId($value);

	public function deleteByTypeName($value);

	public function deleteByTypeId($value);

	public function deleteByFarmName($value);

	public function deleteByFarmId($value);

	public function deleteByCreateTime($value);


}
?>
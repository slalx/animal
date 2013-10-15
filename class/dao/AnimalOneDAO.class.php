<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-14 22:30
 */
interface AnimalOneDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AnimalOne 
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
 	 * @param animalOne primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AnimalOne animalOne
 	 */
	public function insert($animalOne);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AnimalOne animalOne
 	 */
	public function update($animalOne);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryBySerialnumber($value);

	public function queryByGender($value);

	public function queryByBirthday($value);

	public function queryByFatherType($value);

	public function queryByMotherType($value);

	public function queryByFatherSerialnumber($value);

	public function queryByMotherSerialnumber($value);

	public function queryByComeInAddr($value);

	public function queryByGoOutAddr($value);

	public function queryByComeInDate($value);

	public function queryByGoOutDate($value);

	public function queryByPengId($value);

	public function queryByJuanId($value);

	public function queryByFarmId($value);

	public function queryByCreateTime($value);


	public function deleteBySerialnumber($value);

	public function deleteByGender($value);

	public function deleteByBirthday($value);

	public function deleteByFatherType($value);

	public function deleteByMotherType($value);

	public function deleteByFatherSerialnumber($value);

	public function deleteByMotherSerialnumber($value);

	public function deleteByComeInAddr($value);

	public function deleteByGoOutAddr($value);

	public function deleteByComeInDate($value);

	public function deleteByGoOutDate($value);

	public function deleteByPengId($value);

	public function deleteByJuanId($value);

	public function deleteByFarmId($value);

	public function deleteByCreateTime($value);


}
?>
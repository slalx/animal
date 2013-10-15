<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return AnimalDisinfectLogDAO
	 */
	public static function getAnimalDisinfectLogDAO(){
		return new AnimalDisinfectLogMySqlExtDAO();
	}

	/**
	 * @return AnimalDrugDAO
	 */
	public static function getAnimalDrugDAO(){
		return new AnimalDrugMySqlExtDAO();
	}

	/**
	 * @return AnimalDrugTypeDAO
	 */
	public static function getAnimalDrugTypeDAO(){
		return new AnimalDrugTypeMySqlExtDAO();
	}

	/**
	 * @return AnimalEartagDAO
	 */
	public static function getAnimalEartagDAO(){
		return new AnimalEartagMySqlExtDAO();
	}

	/**
	 * @return AnimalFarmDAO
	 */
	public static function getAnimalFarmDAO(){
		return new AnimalFarmMySqlExtDAO();
	}

	/**
	 * @return AnimalFarmTimelineDAO
	 */
	public static function getAnimalFarmTimelineDAO(){
		return new AnimalFarmTimelineMySqlExtDAO();
	}

	/**
	 * @return AnimalFodderDAO
	 */
	public static function getAnimalFodderDAO(){
		return new AnimalFodderMySqlExtDAO();
	}

	/**
	 * @return AnimalFodderTypeDAO
	 */
	public static function getAnimalFodderTypeDAO(){
		return new AnimalFodderTypeMySqlExtDAO();
	}

	/**
	 * @return AnimalImmuneLogDAO
	 */
	public static function getAnimalImmuneLogDAO(){
		return new AnimalImmuneLogMySqlExtDAO();
	}

	/**
	 * @return AnimalJuanDAO
	 */
	public static function getAnimalJuanDAO(){
		return new AnimalJuanMySqlExtDAO();
	}

	/**
	 * @return AnimalLiveLogDAO
	 */
	public static function getAnimalLiveLogDAO(){
		return new AnimalLiveLogMySqlExtDAO();
	}

	/**
	 * @return AnimalOneDAO
	 */
	public static function getAnimalOneDAO(){
		return new AnimalOneMySqlExtDAO();
	}

	/**
	 * @return AnimalPengDAO
	 */
	public static function getAnimalPengDAO(){
		return new AnimalPengMySqlExtDAO();
	}

	/**
	 * @return AnimalStatusDAO
	 */
	public static function getAnimalStatusDAO(){
		return new AnimalStatusMySqlExtDAO();
	}

	/**
	 * @return AnimalTypeDAO
	 */
	public static function getAnimalTypeDAO(){
		return new AnimalTypeMySqlExtDAO();
	}

	/**
	 * @return AnimalVeterinarianDAO
	 */
	public static function getAnimalVeterinarianDAO(){
		return new AnimalVeterinarianMySqlExtDAO();
	}


}
?>
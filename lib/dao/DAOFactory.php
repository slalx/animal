<?php

/**
 * DAOFactory
 * @author: slalx@126.com
 * @date: ${date}
 */
class DAOFactory{

	/*
	 * @return AnimalOneDAO
	 */
	public static function getAnimalOneDAO(){
		return new AnimalOneDAO();
	}



}
?>
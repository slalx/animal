<?php

	session_start();
	$farmId = $_SESSION['ANIMAL_FARM_ID'];

	//include all DAO files
	require_once('../include_dao.php');

		
	//start new transaction
	$transaction = new Transaction();


	$animalType = new AnimalType();
	$animalType->typeName = $_POST["type_name"];
	$animalType->typeAddress = $_POST["type_address"];
	$animalType->typeLive = $_POST["type_live"];
	$animalType->typeDesc = $_POST["type_desc"];
	$animalType->typeDate = $_POST["type_adddate"];
	$animalType->farmId = $farmId;
	$animalType->createTime = date("Y-m-d H:i:s");
	DAOFactory::getAnimalTypeDAO()->insert($animalType);

	//commit transaction
	$transaction->commit();

	$resObj->status = 1;
	$resObj->statusText = 'succ save';
	echo json_encode($resObj);

?>
<?php
	require_once($_SERVER['DOCUMENT_ROOT'].'/parts/inc/encode.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/parts/inc/session.php');
		//include all DAO files
	require_once('../include_dao.php');

	$farmId = $_SESSION['ANIMAL_FARM_ID'];



		
	//start new transaction
	$transaction = new Transaction();


	$animalFodder = new AnimalFodder();
	$animalFodder->fodderTypeId = $_POST["fodderTypeId"];
	$animalFodder->fodderTypeName = $_POST["fodderTypeName"];
	$animalFodder->fodderUnit = $_POST["fodderUnit"];
	$animalFodder->fodderCount = $_POST["fodderCount"];
	$animalFodder->fodderPrice = $_POST["fodderPrice"];//fodderStatus
	$animalFodder->fodderStatus = $_POST["fooderStatus"];
	$animalFodder->farmId = $farmId;
	$animalFodder->createDate = $_POST["createDate"];
	$animalFodder->createTime = date("Y-m-d H:i:s");
	DAOFactory::getAnimalFodderDAO()->insert($animalFodder);

	//commit transaction
	$transaction->commit();

	$resObj->status = 1;
	$resObj->statusText = '保存成功';
	echo json_encode($resObj);

?>
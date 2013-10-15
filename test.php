<?php
	echo "require_once qian";
	//include all DAO files
	require_once('include_dao.php');






	echo "before transaction";
		
	//start new transaction
	$transaction = new Transaction();
	
	echo "after transaction";

	$animalEartag = new AnimalEartag();
	$animalEartag->farmName = "濮阳县宜兴养殖有限公司";


	$animalEartag->createTime = date("Y-m-d H:i:s");
	DAOFactory::getAnimalEartagDAO()->insert($animalEartag);
	echo 'generated id = '.$animalEartag->id.'<br/>';	


		
	//commit transaction
	$transaction->commit();

?>
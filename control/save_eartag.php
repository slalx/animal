<?php
	echo "require_once qian";
	//include all DAO files
	require_once('../include_dao.php');






	echo "开始事务前";
		
	//start new transaction
	$transaction = new Transaction();
	
	echo "开始事务";

	$animalEartag = new AnimalEartag();
	$animalEartag>farmName = "濮阳县宜兴养殖有限公司";
	DAOFactory::getAnimalEartagDAO()->insert($animalEartag);
	echo 'generated id = '.$animalEartag>id.'<br/>';	


		
	//commit transaction
	$transaction->commit();

?>
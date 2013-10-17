<?php
	require_once($_SERVER['DOCUMENT_ROOT'].'/parts/inc/encode.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/parts/inc/session.php');
	//include all DAO files
	require_once('../include_dao.php');


	//变量声明
	$farmId = $_SESSION['ANIMAL_FARM_ID'];
	$farmName = "";
	$query_string = "";
	$earTags = $_POST['eartags'];

	//组装sql语句
	for ($i=0; $i < count($earTags); $i++) { 
		$oneEarTag = $earTags[$i];
		if($oneEarTag != ''){
			$query_string .= " ('".$oneEarTag["serialnumber"]."', '".$oneEarTag["juanName"]."', '".$oneEarTag["juanId"].
				"', '".$oneEarTag["pengName"]."', '".$oneEarTag["pengId"]."', '".$oneEarTag["typeName"]."', '".$oneEarTag["typeId"].
				"', '".$farmName."', '".$farmId."', '".date("Y-m-d H:i:s")."'),";
		}
	}

	//删除最后的逗号,
	$query_string = substr_replace($query_string, "", -1);

	//合成sql语句
	$query_string ="insert into animal_eartag(serialnumber,juan_name,juan_id,peng_name,peng_id,type_name,type_id,farm_name,farm_id,create_time) ".
		"values ".$query_string.";";

	//start new transaction
	$transaction = new Transaction();
	
	//执行sql语句
	$sqlQuery = new SqlQuery($query_string);
	$ids = QueryExecutor::executeInsert($sqlQuery);
		
	//commit transaction
	$transaction->commit();

	//返回
	if($ids){
		$resObj->status = 1;
		$resObj->statusText = '保存成功';
	}else{
		$resObj->status = 0;
		$resObj->statusText = '保存失败';		
	}
	
	echo json_encode($resObj);

?>
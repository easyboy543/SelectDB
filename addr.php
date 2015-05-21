<?php
	require_once("DB_config.php");
    require_once("DB_class.php");

    $db = new DB();
    $db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);
    $db->query("SELECT * from tbl_name");
	
	$str = "";
	if($db->get_num_rows() > 0){
		$str = "[";
	}
    while($result = $db->fetch_array())
    {		
		$str = $str.json_encode($result).",";
    }
	$str = trim($str, ",");
	if($db->get_num_rows() > 0){
		$str = $str."]";
	}
	echo $str;
	
	
	
    

?>
<?php
	require_once("DB_config.php");
    require_once("DB_class.php");

    $db = new DB();
    $db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);
    $db->query("SELECT * from tbl_name");
	$first = 1;
    while($result = $db->fetch_array())
    {
		if($first){
			$first = 0;
			continue;
		}
		echo json_encode($result);
		echo "<br />";
    }
    

?>
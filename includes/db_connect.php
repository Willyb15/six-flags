<?php
	
	$link = mysql_connect('127.0.0.1', 'x', 'x');
	if(!$link){
		print 'not connected' . mysql_error();
		exit;
	}
	$db_selected = mysql_select_db('sixflags', $link);
	if(!$db_selected){
		die("Cannot use database sixflags:" . mysql_error());
	}
	$query = "SELECT * FROM students";
	$result = mysql_query($query);

	$number_of_rows = mysql_num_rows($result);
	for($i=0; $i<$number_of_rows; $i++){
		$row = mysql_fetch_assoc($result);
		print_r($row);
		print '<hr> />';
	}
	
?>

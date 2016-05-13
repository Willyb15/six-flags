<?php
	include 'includes/db_connect.php';
	// print_r($_POST);
	if($_GET['task'] == 'update'){
		//We know they got here from teh update form!!!!
		$what_to_update = '';
		foreach($_POST as $key=>$value){
			$what_to_update .= $key."='".$value."',";
		}
		$trimmed_update = rtrim($what_to_update, ",");
		$query = 'UPDATE promos 
			SET ' . $trimmed_update
			. ' WHERE id = ' . $_GET['id'];
		$update_result = mysql_query($query);
		header('Location: admin.php?updated=true');		
	}else if($_GET['task'] == 'insert'){
		//they are at the new prom page!!!!
		$db_columns = '';
		$values = '';
		foreach($_POST as $key=>$value){
			$db_columns .= $key.',';
			$values .= "'".$value."',";
		}
		$trimmed_values = rtrim($values, ",");
		$trimmed_db_columns = rtrim($db_columns, ",");
		$query = 'INSERT INTO promos 
			('.$trimmed_db_columns.') 
			VALUES 
			('.$trimmed_values.')';
		$result = mysql_query($query);
		header('Location: admin.php?updated=true');
	}else if($_GET['task'] == 'delete'){
		//DELETE THE PROMO!!
		$query = 'DELETE FROM promos WHERE id = '.$_GET['id'];
		$delete = mysql_query($query);
		header('Location: admin.php?deleted=true');
	}
?>
<!-- 	// include 'includes/db_connect.php';

	// $db_columns = '';
	// $values = '';
	// foreach($_POST as $key=>$value){
	// 	$db_columns .= $key.',';
	// 	$values .= "'".$value."',";
	// }
	// $trimmed_values = rtrim($values, ",");
	// $trimmed_db_columns = rtrim($db_columns, ",");
	
	// $query = 'INSERT INTO promos 
	// 	('.$trimmed_db_columns.') 
	// 	VALUES 
	// 	('.$trimmed_values.')';
	// 	$result = mysql_query($query);
	// 	header('Location: admin.php?updated=true');



	// $query = 'DELETE FROM promos 
	// 	('.$trimmed_db_columns.') 
	// 	VALUES 
	// 	('.$trimmed_values.')';
	// 	$result = mysql_query($query);
	// 	header('Location: admin.php?updated=true');

// 	$values = '';
// 	foreach($_POST as $field){
// 		$values .= "'".$field."'";
// 	}
// 	print_r($_POST);


// 	$title = "'".$_POST['title']."'";
// 	$header_image = "'".$_POST['header_image']."'";
// 	$header_text = "'".$_POST['header_text']."'";
// 	$body_text = "'".$_POST['body_text']."'";
// 	$lower_image_text = "'".$_POST['lower_image_text']."'";
// 	$lower_header = "'".$_POST['lower_header']."'";
// 	$lower_body_text = "'".$_POST['lower_body_text']."'";
// 	$lower_image2 = "'".$_POST['lower_image2']."'";
// 	$lower_header2 = "'".$_POST['lower_header2']."'";
// 	$lower_body_text2 = "'".$_POST['lower_body_text2']."'";


// 	$query = 'INSERT INTO promos 
// 		(title, header_image, header_text, body_text, lower_image_text, lower_header, lower_body_text, lower_image2, lower_header2, lower_body_text2) 
// 		VALUES 
// 		('.$title.','.$header_image.','.$header_text.','.$body_text.','.$lower_image_text.','.$lower_header.','.$lower_body_text.','.$lower_image2.','.$lower_header2.','.$lower_body_text2.')';

// print $query;
// exit;
// 	$result = mysql_query($query);
// 	print mysql_error();
// 	print "<br />";
// 	print "Finished";
?> -->
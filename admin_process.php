<?php
	include 'includes/db_connect.php';

	$values = '';
	foreach($_POST as $field){
		$values .= "'".$field."'";
	}

	print $values;
	
	exit;
	
	$title = "'".$_POST['title']."'";
	$header_image = "'".$_POST['header_image']."'";
	$header_text = "'".$_POST['header_text']."'";
	$body_text = "'".$_POST['body_text']."'";
	$lower_image_text = "'".$_POST['lower_image_text']."'";
	$lower_header = "'".$_POST['lower_header']."'";
	$lower_body_text = "'".$_POST['lower_body_text']."'";
	$lower_image2 = "'".$_POST['lower_image2']."'";
	$lower_header2 = "'".$_POST['lower_header2']."'";
	$lower_body_text2 = "'".$_POST['lower_body_text2']."'";


	$query = 'INSERT INTO promos 
		(title, header_image, header_text, body_text, lower_image_text, lower_header, lower_body_text, lower_image2, lower_header2, lower_body_text2) 
		VALUES 
		('.$title.','.$header_image.','.$header_text.','.$body_text.','.$lower_image_text.','.$lower_header.','.$lower_body_text.','.$lower_image2.','.$lower_header2.','.$lower_body_text2.')';

print $query;
exit;
	$result = mysql_query($query);
	print mysql_error();
	print "<br />";
	print "Finished";
?>
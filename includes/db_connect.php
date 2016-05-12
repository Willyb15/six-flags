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
	// $query = "SELECT * FROM students";
	// $result = mysql_query($query);

	// $number_of_rows = mysql_num_rows($result);
	// for($i=0; $i<$number_of_rows; $i++){
	// 	$row = mysql_fetch_assoc($result);
	// 	print_r($row);
	// 	print '<hr> />';
	// }
		$promo_array[] = array(
		'title' => 'Online Store',
		'image' => 'https://www.sixflags.com/sites/default/files/styles/park_page_small/public/teaser_sp_combo-ww.jpg?itok=hoxloclQ',
		'text_header' => 'Discount Season Passes',
		'text_body' => 'Buy Season Passes now and save! Or get Combo Passes for unlimited visits to Six Flags Over Georgia.',
		'lower_image' => 'https://www.sixflags.com/sites/default/files/styles/park_page_thumb/public/chickenstrips_90x68_0.png?itok=VfE3UiKg',
		'lower_header' => 'Online Meal Deals',
		'lower_text' => 'Save time and money by printing meal deals online.',
		'lower_image2' => 'https://www.sixflags.com/sites/default/files/styles/park_page_thumb/public/Cabanas_90x68.jpg?itok=X4crIjXa',
		'lower_header2' => 'Cabanas',
		'lower_text2' => 'Cool off and relax in your own private hideaway.'
	);

	$promo_array[] = array(
		'title' => 'Rides',
		'image' => 'https://www.sixflags.com/sites/default/files/styles/park_page_small/public/teaser_sp_combo-ww.jpg?itok=hoxloclQ',
		'text_header' => 'Wahoo Racer',
		'text_body' => 'Coming May 21, race head-first, stomach-down on a six-lane course to the finish line.',
		'lower_image' => 'https://www.sixflags.com/sites/default/files/styles/park_page_thumb/public/chickenstrips_90x68_0.png?itok=VfE3UiKg',
		'lower_header' => 'Dive Bomber',
		'lower_text' => 'Our tallest water slide -- Dive Bomber!',
		'lower_image2' => 'https://www.sixflags.com/sites/default/files/styles/park_page_thumb/public/Cabanas_90x68.jpg?itok=X4crIjXa',
		'lower_header2' => 'Tornado',
		'lower_text2' => 'There’s no calm in the eye of this storm.'
		);

	$promo_array[] = array(
		'title' => 'Groups',
		'image' => 'https://www.sixflags.com/sites/default/files/styles/park_page_small/public/teaser_sp_combo-ww.jpg?itok=hoxloclQ',
		'text_header' => 'Bring the Whole Group',
		'text_body' => 'Great rates for groups. Once inside, relax with a catered meal in your own picnic area.',
		'lower_image' => 'Lazy River',
		'lower_header' => 'Youth Group Events',
		'lower_text' => 'Camps, clubs, scouts and cubs — they all love a day at the park.',
		'lower_image2' => 'Group Birthday Party',
		'lower_header2' => 'Birthday Parties',
		'lower_text2' => 'Six FlagsWhite Water has birthday packages for parties of 8 or more.'
		);
?>

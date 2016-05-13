<?php
	include 'includes/db_connect.php';
	$updated = $_GET['updated'];
	if($updated == 'true'){
		$message = 'Your promo has been added to the database';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body>

	<div class="container">
		<div class="row">
			<div class="admin-wrapper col-sm-6 col-sm-offset-3">
				<div class="success msg"> <?php print $message; ?></div>
				<div class="col-sm-12"><a href="add_promotion.php">Create New Promotion</a></div>
				<div class="col-sm-12"><a href="manage_promotion.php">Manage New Promotion</a></div>
			</div>
		</div>
	</div>


</body>
</html>
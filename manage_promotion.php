<?php
	include 'includes/db_connect.php';
	$query = 'SELECT * FROM promos';
	$result = mysql_query($query);
	$promo_array = [];
	while($row = mysql_fetch_assoc($result)){
		$promo_array[] = $row;
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
			<div class="admin-wrapper col-sm-10 col-sm-offset-1">
				<div class="success msg"><?php print $message; ?></div>
				<table border=1>
				<?php foreach($promo_array as $promo): ?>
					<tr class="promo_row">
						<td><?php print $promo['title']; ?></td>
						<td><?php print $promo['id']; ?></td>
						<td><a href="edit_promotions.php?id=<?php print $promo['id'];?>"><button class="btn btn-primary">Edit</button></td>
						<td><a href="admin_process.php?task=delete&id=<?php print $promo['id'];?>"><button class="btn btn-danger">Delete</button></td>
					</tr>	
				<?php endforeach; ?>
			</table>
			</div>
		</div>
	</div>


</body>
</html>
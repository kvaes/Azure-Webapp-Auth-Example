
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" context="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Azure Webapp Authentication Demo</title>
    <meta name="description" content="">
	<link rel="stylesheet" href="https://bootswatch.com/superhero/bootstrap.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>	
</head>
<body>
	<div class="container">
		<?php
		echo '<table class="table table-striped table-hover">';
		foreach (getallheaders() as $name => $value) {
			echo "<tr><td>$name</td><td>$value</td></tr>";
		}
		echo "</table>";
		?>
	</div>
</body>
</html>
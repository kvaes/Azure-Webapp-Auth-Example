
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
		
		$authUser = $_SERVER['HTTP_X_MS_CLIENT_PRINCIPAL_NAME'];
		if ($authUser <> "") {
			echo "<h1>Logged in as $authUser</h1>";
			echo '<p><a href="/.auth/me">User details</a></p>';
			echo '<p><a href="/.auth/logout/">Logout</a></p>';
		} else {
			echo "<h1>You are not logged in!</h1>";
			echo '<p><a href="/.auth/login/aad">Login Azure Active Directory</a></p>';
			echo '<p><a href="/.auth/login/facebook">Login Facebook</a></p>';
			echo '<p><a href="/.auth/login/google">Login Google</a></p>';
			echo '<p><a href="/.auth/login/twitter">Login Twitter</a></p>';
			echo '<p><a href="/.auth/login/microsoft">Login Microsoft</a></p>';
		}
		
		/*echo "<h1>_Server</h1>";
		echo "<p>";
		print_r($_SERVER);
		echo "</p>";*/
		
		?>
	</div>
</body>
</html>
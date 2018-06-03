<?php
// Create database connection
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "pronto";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check for connection errors
if (mysqli_connect_errno()) {
		die ("Database connection failed: " .
				mysqli_connect_error() .
				" (" . mysqli_connect_errno() . ")"
		);
}
//Database Query
	$table = "main";
	$query = "SELECT * FROM {$table}";
	$result = mysqli_query($connection, $query);
// Check for SQL errors
	if (!$result) {
			die ("Database query failed.");
	}
?>


<?php
			}
// Release Returned Data
			mysqli_free_result($result);
// Close Connection
			mysqli_close($connection);
		?>
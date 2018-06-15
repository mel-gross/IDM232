<?php   // Local database credentials
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "root";
  $dbname = "melgross_pronto";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
  die("Database connection failed: " .
    mysqli_connect_error() .
    " (" . mysqli_connect_errno() . ")"
  );
}

//grabing searched words from searchbar form ($search_input)
$search_input= $_GET['keyword'];
$search_results = explode (" ",$search_input);
if (!$search_results) {
    echo 'No results';
    exit;
}
//search keywords array ($search_results)
$ids = [];
$counter = 0;  
$table = "main"; 
$result = mysqli_query($connection,"SELECT id FROM 'main'");
if (!$result) {
    echo 'Could not run query: ' . mysqli_error();
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Pronto!</title>
</head>

<body>
    <?php include 'header-include.php'; ?>
   
    <?php include "footer-include.php"; 
    mysqli_free_result($result);
	mysqli_close($connection); ?>
</body>

</html>
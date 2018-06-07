   
<?php include "dbConnect-include.php"; 

$tags = "tags"; 
$tagsquery= "SELECT * FROM {$tags} WHERE forkey=1"; 
$tagsresult = mysqli_query($connection, $tagsquery);

// Check for SQL errors
if (!$tagsresult) {
    die ("Database query failed.");
}

while ($trow = mysqli_fetch_assoc($tagsresult)){ 
$tagsraw= array($trow['tags']);
$taglist= array_unique($tagsraw);
print_r(array_values($taglist));}
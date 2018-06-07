<?php include "dbConnect-include.php"; 

//grabing searched words from searchbar form ($search_input)
$search_input= $_REQUEST['keyword'];
$search_results = explode (" ",$search_input);
if (!$search_results) {
    echo 'No results';
    exit;
}
print_r(array_values($search_results));
//search keywords array ($search_results)
$main = "main"; 
$tags = "tags"; 
$ingredients = "ingredients"; 
$directions = "directions"; 

$search_query = "SELECT * FROM main AND tags AND ingredients AND directions WHERE title OR subtitle OR ingredient OR tag OR step  LIKE '%" . $search_results . "%' ";
$query_result = mysqli_query($connection,$search_query);

$test = array($query_result);
print_r(array_values($test));
while($row=mysql_fetch_assoc($query_result)){ 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style2.css">
    <title>Pronto!</title>
</head>

<body>
    <?php include 'header-include.php'; ?>
    <main>
    <div class="recipeGrid">
                        <a href="recipes.php?id=<?php echo $row['id']; ?>">
                        <div class="recipeSlot">
                        <img src="assets/<?php echo $row['thumbnail'];?>.jpg" width="400" alt="Recipe Thumbnail">
                            <div class="onTop">
                                <h1><?php echo $row['title']; ?></h1>
                                <p><?php echo $row['subtitle']; ?></p>
                            </div>
                        </div>
                        </a>
                        <?php } ?>  <!--closing the main while loop -->
                    </div>
    </main>    
    <?php include "footer-include.php"; ?>
</body>


</html>
    
<?php
// Release Returned Data + Close Connection
	mysqli_free_result($query_result);
	mysqli_close($connection);
?>
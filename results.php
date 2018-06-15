<?php include "dbConnect-include.php"; 

//Database Query of the entire main table and storing its results in the $mainresult
$main = "main"; //selecting from the main table and storing that into the var $main
$mainquery= "SELECT * FROM {$main} WHERE "; //selects all columns from main table
$mainresult = mysqli_query($connection, $mainquery);

// Check for SQL errors
if (!$mainresult) {
    die ("Database query failed.");
}

//grabing searched words from searchbar form
$keyword= $_REQUEST['keyword'];


if (!$search_results) {
    echo 'No results';
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<?php require 'header-include.php'; ?>
</header>
<body>
    <main>
    <div class="recipeGrid">
        <?php while ($row = mysqli_fetch_assoc($mainresult)){ ?> <!-- open main while loop -->
        <div class="recipeSlot">
            <img src="assets/<?php echo $row['thumbnail'];?>.jpg" width="400" alt="Recipe Thumbnail">
            <div class="onTop">
                <h1><?php echo $row['title']; ?></h1>
                <p><?php echo $row['subtitle']; ?></p>
            </div>
        </div>
        <?php } ?>  <!--closing the main while loop -->
    </div>
    </main>    
</body>
<?php require 'footer-include.php'; ?>
</html>
    
<?php
// Release Returned Data + Close Connection
	mysqli_free_result($result);
	mysqli_close($connection);
?>
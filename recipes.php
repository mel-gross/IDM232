   
<?php include "dbConnect-include.php"; ?>     
<?php
//Database Query of the entire main table and storing its results in the $mainresult
$main = "main"; //selecting from the main table and storing that into the var $main
$mainquery= "SELECT * FROM {$main}"; //selects all columns from main table
$mainresult = mysqli_query($connection, $mainquery);

// Check for SQL errors
if (!$mainresult) {
    die ("Database query failed.");
}
?>
<!DOCTYPE html>
<html lang="en">
<?php require 'header-include.php'; ?>
    <div class="filterContainer">
        <div id="searchbar">
        <form action="search.php" id="search_form" method="POST">
            <input type="text" name="keyword" placeholder="Search...">
            <button type="submit" name="search_submit" value="Send">Submit</button>
        </form>
    </div>
    </header>
    <main>
    </header> 
                <main> 
                    <div class="recipeGrid">
                    <?php while ($row = mysqli_fetch_assoc($mainresult)){ ?> <!-- open main while loop -->
                        <a id="imageLink" href="recipe.php?id=<?php echo $row['id']; ?>">
                        <div class="recipeSlot">
                        <img src="assets/<?php echo $row['thumbnail'];?>.jpg" width="400" alt="Recipe Thumbnail">
                            <div class="onTop">
                                <h1 id="title"><?php echo $row['title']; ?></h1>
                                <p><?php echo $row['subtitle']; ?></p>
                            </div>
                        </div>
                        </a>
                        <?php } ?>  <!--closing the main while loop -->
                    </div>
                </main>

    </body>
    <?php require 'footer-include.php'; ?>
    </html>
    
    <?php
// Release Returned Data
			mysqli_free_result($mainresult);
// Close Connection
			mysqli_close($connection);
?>
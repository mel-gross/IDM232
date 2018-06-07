<?php include "dbConnect-include.php"; ?>
<?php 
$id = isset($_GET['id']) ? $_GET['id'] : null;
$main = "main"; //selecting from the main table and storing that into the var $main
$mainquery= "SELECT * FROM {$main} WHERE id='$id'"; //selects all columns from main table
$mainresult = mysqli_query($connection, $mainquery);

$tags = "tags"; 
$tagsquery= "SELECT * FROM {$tags} WHERE forkey='$id'"; 
$tagsresult = mysqli_query($connection, $tagsquery);

$ingredients = "ingredients"; 
$ingredientsquery= "SELECT * FROM {$ingredients} WHERE forkey='$id'"; 
$ingredientsresult = mysqli_query($connection, $ingredientsquery);

$directions = "directions"; 
$directionsquery= "SELECT * FROM {$directions} WHERE forkey='$id'"; 
$directionsresult = mysqli_query($connection, $directionsquery);

$i=1;
// Check for SQL errors
if (!$mainresult) {
    die ("Database main query failed.");
} elseif (!$tagsresult){ die ("Database tags query failed.");
} elseif (!$ingredientsresult){ die ("Database ingredients query failed.");
} elseif (!$directionsresult){
    die ("Database directitons query failed.");
}
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
        <!-- open MAIN while loop -->
        <?php while ($row = mysqli_fetch_assoc($mainresult)){ ?>
        <a name="top"></a>
        <div class="RecipeHeader">
            <div class="displayImage"><img src="assets/<?php echo $row['thumbnail'];?>.jpg" width="400" alt="Recipe Thumbnail"></div>
            <div class="info">
            <h1 class="title"><?php echo $row['title']; ?></h1>
            <h2 class="subtitle"><?php echo $row['subtitle']; ?></h2>
            <ul class="tags">
                <!-- open TAGS while loop -->
                <?php while ($trow = mysqli_fetch_assoc($tagsresult)){ ?>
                <li>
                    #<?php echo $trow['tag']; ?>
                </li>
                <?php } ?> 
                <!--closing the TAGS while loop -->
            </ul>
            <br>
            <p class="description"><?php echo $row['description']; ?></p>
            </div>
        </div>
        <div id="stepsGrid">
        <div class="ingredients">
            <h1>Ingredients</h1>
                <img src="assets/<?php echo $row['ingredientsimg'];?>.png" alt="Recipe ingredients img">
            <ul>   
                <!-- open ingredients while loop -->
                <?php while ($irow = mysqli_fetch_assoc($ingredientsresult)){ ?>
                <li>
                    <?php echo $irow['ingredient']; ?>
                </li>
                <?php } ?>
                <!--closing the ingredients while loop -->
            </ul>
        </div>
        <div class="instructions">
            <?php while ($drow = mysqli_fetch_assoc($directionsresult)){?>
            <!-- open directions while loop -->
            <div class="step">
                <h2 id="stepTitle">Step <?php echo $i++;?></h2>
                
                <img id="stepImg" src="assets/<?php echo $drow['image-hi'];?>B_retina_feature.jpg" alt="direction image" >
                <p>
                    <?php echo $drow['step']; ?>
                </p>
            </div>
            <br>
            <?php }}?>
            <!--closing the DIRECTIONS AND MAIN while loop -->
        </div></div>
        <a href="#top"> <button>Back to top</button></a>
    </main>
    <!-- include footer.php  -->
    <?php require 'footer-include.php';?>
</body>

</html>

// php closing the connection
<?php
			
// Release Returned Data
			mysqli_free_result($result);
// Close Connection
			mysqli_close($connection);
?>
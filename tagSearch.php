<?php include "dbConnect-include.php";   
$tagid="";
if (isset($_GET['tag'])){
    //TAG search results
    $tag = ($_GET['tag']);
    $tagsquery2 = "SELECT forkey FROM tags WHERE tag ='$tag'"; 
    $tagsresult2 = mysqli_query($connection, $tagsquery2);
    if (!tagsresult2) {echo 'Could not run query: ' . mysqli_error(); exit;}
    $queryResult2 = mysqli_num_rows(tagsresult2);
    while ($tagrow = mysqli_fetch_assoc($tagsresult2)){
    $tagid= $tagrow['forkey'];}

    $result = mysqli_query($connection, "SELECT * FROM main WHERE id = $tagid");
    if (!$result) {echo 'Could not run query: ' . mysqli_error(); exit;}
    $queryResult = mysqli_num_rows($result);
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
    <div class="filterContainer">
        <div id="searchbar">
            <form action="search.php" id="search_form" method="POST">
                <input type="text" name="keyword" placeholder="Search...">
                <button type="submit" name="search_submit" value="Send">Submit</button>
            </form>
        </div>
        </header>
        <main>
            <div class="recipeGrid">
                <?php if ($queryResult > 0) { while ($row = mysqli_fetch_assoc($result)){ ?>
                <a id="imageLink" href="recipes.php?id=<?php echo $row['id']; ?>">
                    <div class="recipeSlot">
                        <img src="assets/<?php echo $row['thumbnail'];?>.jpg" width="400" alt="Recipe Thumbnail">
                        <div class="onTop">
                            <h1 id="title">
                                <?php echo $row['title']; ?>
                            </h1>
                            <p>
                                <?php echo $row['subtitle']; ?>
                            </p>
                        </div>
                    </div>
                </a>
                <?php }} ?>
            </div>
        </main>

</body>

</html>
<?php
// Release Returned Data
            mysqli_free_result($queryResult);
            mysqli_free_result($queryResult2);
// Close Connection
			mysqli_close($connection);
?>
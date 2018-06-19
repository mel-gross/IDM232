<?php include "dbConnect-include.php";  
 $tagid[]=""; 
 $id="";
 $thumbnail="";
 $title="";
 $subtitle="";
if (isset($_GET['tag'])){
    //TAG search results
    $tag = ($_GET['tag']);
    $tagsquery = "SELECT forkey FROM tags WHERE tag ='$tag'"; //grabs foreign keys of all the matching tags
    $tagsresult = mysqli_query($connection, $tagsquery);
    if (!$tagsresult) {echo 'Could not run query1: ' . mysqli_error(); exit;}}
  
    while ($tagrow = mysqli_fetch_array($tagsresult)){ //running trhough the results
    $tagid = $tagrow["forkey"]; 
   } echo $tagid;
   echo implode($tagid);

    $result = mysqli_query($connection, "SELECT * FROM main WHERE id ='$tagid'"); //selects recipes with the id matching the foreign key
    if (!$result) {echo 'Could not run query2: ' . mysqli_error(); exit;}
    
    while ($row = mysqli_fetch_assoc($result)){
        $id= $row['id'];
        $thumbnail= $row['thumbnail'];
        $title= $row['title'];
        $subtitle= $row['subtitle'];
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
                <a id="imageLink" href="recipes.php?id=<?php echo $id; ?>">
                    <div class="recipeSlot">
                        <img src="assets/<?php echo $thumbnail;?>.jpg" width="400">
                        <div class="onTop">
                            <h1 id="title">
                                <?php echo $title; ?>
                            </h1>
                            <p>
                                <?php echo $subtitle; ?>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </main>

</body>

</html>
<?php
// Release Returned Data
            mysqli_free_result($result);
            mysqli_free_result($tagsresult);
// Close Connection
			mysqli_close($connection);
?>
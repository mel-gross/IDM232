<?php include "dbConnect-include.php";     


//grab searched words
if (isset($_POST['keyword'])){
$keyword = $_POST['keyword'];
$search_text = ucfirst($keyword);
echo $search_text;
    if (!$search_text) {
        echo 'No inputs';
        exit;
    }

// $forkey=[];
// $id = ""

//------MAIN TABLE QUERY
//query searched words in recipes
$result = mysqli_query($connection,
"SELECT * FROM main WHERE 
title LIKE '%$search_text%'
OR subtitle LIKE '%$search_text%'
OR 'description' LIKE '%$search_text%'
");
if (!$result) {echo 'Could not run query: ' . mysqli_error(); exit;}
//how many results?
$queryResult = mysqli_num_rows($result);
echo " - Results counter:". $queryResult;}


if (isset($_POST['keyword'])){
    $keyword = $_POST['keyword'];
    $search_text = $keyword;
    echo $search_text;
        if (!$search_text) {
            echo 'No inputs';
            exit;
        }
$result2 = mysqli_query($connection,
"SELECT * FROM directions WHERE 
step LIKE '%$search_text%' UNION
SELECT * FROM ingredients WHERE 
ingredient LIKE '%$search_text%' UNION
SELECT * FROM tags WHERE 
tag LIKE '%$search_text%'
");
if (!$result) {echo 'Could not run query: ' . mysqli_error(); exit;}
//how many results?
$queryResult2 = mysqli_num_rows($result2);
echo " - Results counter2:". $queryResult2;}

// elseif (isset($_GET['tag'])){
//     //TAG search results
//     $tag = ($_GET['tag']);
//     $tagsquery2 = "SELECT forkey FROM tags WHERE tag ='$tag'"; 
//     $tagsresult2 = mysqli_query($connection, $tagsquery2);
//     if (!tagsresult2) {echo 'Could not run query: ' . mysqli_error(); exit;}
//     $queryResult2 = mysqli_num_rows(tagsresult2);
//     while ($tagrow = mysqli_fetch_assoc($tagsresult2)){
//     $tagid= $tagrow['forkey'];}}

else {
    echo "Oh no, there seems to be no results for your search.";
}



// //------INGREDIENTS TABLE QUERY
// //query searched words in recipes
// $result2= mysqli_query($connection,
// "SELECT * FROM ingredients WHERE 
// ingredient LIKE '%$search_text%'");
// if (!$result2) {echo 'Could not run ing query: ' . mysqli_error(); exit;}
// array_unique($result2);
// //how many results?
// $queryResult2 = mysqli_num_rows($result2);
// echo "  ing results row #:". $queryResult2;
// while ( $row2 = mysqli_fetch_assoc($result2) ) 
// {$forkey = $row2['forkey'];}
// echo "  idt results:". $forkey;

// $id[] =mysqli_query($connection,"SELECT * FROM main WHERE id===$forkey");
// if (!$id) {echo 'Could not run id query: ' . mysqli_error(); exit;}
// echo "  ids:" . $id;

// //------DIRECTIONS TABLE QUERY
// //query searched words in recipes
// $result3 = mysqli_query($connection,
// "SELECT * FROM directions WHERE 
// step LIKE '%$search_text%'
// ");
// if (!$result3) {echo 'Could not run query: ' . mysqli_error(); exit;}
// //how many results?
// $queryResult3 = mysqli_num_rows($result3);
// echo "  step results:". $queryResult3;
// while ( $row3 = mysqli_fetch_assoc($result) ) 
// {$directionsForkey= $row3['forkey'];}

// //------TAGS TABLE QUERY
// //query searched words in recipes
// $result4 = mysqli_query($connection,
// "SELECT * FROM tags WHERE 
// tag LIKE '%$search_text%'
// ");
// if (!$result4) {echo 'Could not run query: ' . mysqli_error(); exit;}
// //how many results?
// $queryResult4 = mysqli_num_rows($result4);
// echo "  tags results:". $queryResult4;
// //get foreign key of matching recipes
// while ( $row4 = mysqli_fetch_assoc($result4) ) 
// {$tagsForkey= $row4['forkey'];}

// //combine all foreign keys into one array
// echo ' ingredient forkey:'.$ingredientForkey;
// echo ' tags forkey:'.$tagsForkey;
// echo ' direction forkey:'.$directionsForkey;

// function array_merge_retain($tagsForkey=array(),$directionsForkey=array(),$ingredientForkey=array()){
//     $array_merge= array();
//     if(!empty($tagsForkey) && !empty($directionsForkey) && !empty($ingredientForkey)){
//         foreach ($tagsForkey as $value){
//             if(!empty($value)){
//             $array_merge([$field]=$value);}
//             elseif (!array_key_exists($field,$array_a)){
//             $array_merge[$field]=$value;}
//         }
//         foreach ($directionsForkey as $field=>$value){
//             if(!empty($value)){
//             $array_merge[$field]=$value;}
//             elseif (!array_key_exists($field,$array_a)){
//             $array_merge[$field]=$value;}
//         }
//         foreach ($ingredientForkey as $field=>$value){
//             if(!empty($value)){
//             $array_merge[$field]=$value;}
//             elseif (!array_key_exists($field,$array_a)){
//             $array_merge[$field]=$value;}
//         }}
//     return $array_merge ;  
//     }
//     //https://www.epochdev.com/blog/tutorials/php_development/array_merge_retain -- help from here 

// $forkeys = array_merge_retain($tagsForkey,$directionsForkey,$ingredientForkey);
// echo "  forkeys:". $forkeys;

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
            <?php if (!$queryResult) echo '<p>'.'Oh no, there seems to be no results for your search.'.'Please check your spelling, and try again. Sometimes casing might affect results.'.'Try also using more general words or ingredient names. You can find a list of existing tags on the <a href="index.php"> homepage</a>'.'</p>' ?>
            </div>
            
    </main>

</body>

</html>
<?php
// Release Returned Data
			mysqli_free_result($result);
// Close Connection
			mysqli_close($connection);
?>
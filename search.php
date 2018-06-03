<?php 
  if(isset($_POST['submit']))  //checks if form was submited
    {if(isset($_GET['go'])) //check whether the query string has a value of go
        {if(preg_match("^/[A-Za-z]+/", $_POST['title'])){ 
           $title=$_POST['title']; }}
       //-query  the database table 
       $searchquery= "SELECT ID, title, subtitle FROM {$main} WHERE title LIKE '%" . $title . "%' OR subtitle LIKE '%" . $subtitle ."%'"; 
       $searchresult = mysqli_query($searchquery); 
       while($row=mysql_fetch_array($result)){ 
            $title  =$row['title']; 
    	    $Lsubtitle=$row['subtitle']; 
            $id=$row['id']; 
            echo "<ul>\n"; 
	        echo "<li>" . "<a  href=\"search.php?id=$id\">"   .$title . " " . $subtitle .  "</a></li>\n"; 
	        echo "</ul>";
  else { echo  "<p>Please enter a search query</p>";  } 
    }  
?>
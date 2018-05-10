<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!--using GET values-->
    <?php 
    $link_name ="Page 2";
    ?>
    <a href="phpLecture_week4_page.php?id="parameter"&color="blue"">
        <!--parameters after the URL let me pass data from one page to another-->
    <!--super globals start with underscore(_) and are ALL CAPS  $_GET-->
    <?php
    print_r($_GET["id"]) ?>
    <!--to get id="parameter"-->
    <!--urlencode(GET values) so it encodes special carachters to hexadecimals.spaces are "+" -->
    <!--rawurlenconde(GET values) euqals but: spaces are %20. use it for anything before the "?" so apache can read it-->
    <!--start php file names with udnersocre to show that it is a partial file only, part of something bigger-->

    <!--using POST (for forms)-->
    


    </a>
</body>
</html>
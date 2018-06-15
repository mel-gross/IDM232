<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Pronto!</title>
</head>
<header>
    <img id="headerLogo" src="assets/logo.png" alt="Pronto!" >
    <nav>
        <div class="navSection">
            <a href="about.php">About</a>
        </div>
        <div class="navSection">
            <a href="index.php">Home</a>
        </div>
        <div class="navSection">
            <a href="recipes.php">Recipes</a>
        </div>
    </nav> 
    </div>
</header>
<body>
    <main>
        <div class="splash">
            <h1>Welcome to Pronto!</h1>
            <h2>Find the perfect recipe for you:</h2>
            <div id="homeSearchbar">
                <form action="search.php" id="search_form" method="POST">
                    <input type="text" name="keyword" placeholder="Search...">
                    <button type="submit" name="search_submit" value="Send">Submit</button>
                </form>
            <div id="tagsContainer">
                <a href="tagSearch.php?tag=easy"><div class="tagButton">easy</div></a>
                <a href="tagSearch.php?tag=full of flavor"><div class="tagButton">full of flavor</div></a>
                <a href="tagSearch.php?tag=fruit"><div class="tagButton">fruit</div></a>
                <a href="tagSearch.php?tag=comfort food"><div class="tagButton">comfort food</div></a>
                <a href="tagSearch.php?tag=fancy"><div class="tagButton">fancy</div></a>
                <a href="tagSearch.php?tag=stovetop"><div class="tagButton">stovetop</div></a>
                <a href="tagSearch.php?tag=vegetarian"><div class="tagButton">vegetarian</div></a>
                <a href="tagSearch.php?tag=cold"><div class="tagButton">cold</div></a>
                <a href="tagSearch.php?tag=cheesy"><div class="tagButton">cheesy</div></a>
                <a href="tagSearch.php?tag=oven"><div class="tagButton">oven</div></a>
                <a href="tagSearch.php?tag=asian"><div class="tagButton">asian</div></a>
                <a href="tagSearch.php?tag=stir fry"><div class="tagButton">stir fry</div></a>
                <a href="tagSearch.php?tag=vegetables"><div class="tagButton">vegetables</div></a>
                <a href="tagSearch.php?tag=seafood"><div class="tagButton">seafood</div></a>
                <a href="tagSearch.php?tag=mexican"><div class="tagButton">mexican</div></a>
                <a href="tagSearch.php?tag=burger"><div class="tagButton">burger</div></a>
                <a href="tagSearch.php?tag=roast"><div class="tagButton">roast</div></a>
                <a href="tagSearch.php?tag=pasta"><div class="tagButton">pasta</div></a>
                <a href="tagSearch.php?tag=stew"><div class="tagButton">stew</div></a>
                <a href="tagSearch.php?tag=sweet"><div class="tagButton">sweet</div></a>
                <a href="tagSearch.php?tag=steak"><div class="tagButton">steak</div></a>
                <a href="tagSearch.php?tag=salad"><div class="tagButton">salad</div></a>
                <a href="tagSearch.php?tag=spicy"><div class="tagButton">spicy</div></a>
                <a href="tagSearch.php?tag=pizza"><div class="tagButton">pizza</div></a>
                <a href="tagSearch.php?tag=southwest"><div class="tagButton">southwest</div></a>
                <a href="tagSearch.php?tag=healthy"><div class="tagButton">healthy</div></a>
            </div>            
        </div>
    </main>
</body>

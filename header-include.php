<?php 
echo '<header>
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
    <div class="filterContainer">
        <div id="searchbar">
        <form action="action_page.php" id="search_form" method="GET">
            <input type="text" name="keyword" placeholder="Search...">
            <button type="submit" name="search_submit" value="Send">Submit</button>
        </form>
    </div>
    </div>
</header>'; 
?>

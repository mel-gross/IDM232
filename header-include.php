<?php
    echo "<header>
    <img src="assets/logo.png" alt="Pronto!" id="headerLogo">
    <nav>
        <div class="navSection">
            <a href="about.html">About</a>
        </div>
        <div class="navSection">
            <a href="index.html">Home</a>
        </div>
        <div class="navSection">
            <a href="recipes.html">Recipes</a>
        </div>
    </nav> 
    <div class="filterContainer">
        <div id="searchbar">
        <form action="/action_page.php" >
            <input type="text" name="search" placeholder="Search...">
            <button type="submit">Submit</button>
        </form>
    </div>
    </div>
</header>"
?>
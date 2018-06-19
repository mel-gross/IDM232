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
    <div class="aboutContainer">
        <p>Welcome chef!
            <br>I am glad you could join us. Pronto! is an online recipe collection of the finest meals broken down into simple
            steps including images for you to follow. It is easy to browse through our number of recipes using different
            style and ingredient filters to cater our cravings.
            <br>But that is not all! Pronto! is also a community. You can upload your favorite personal recipes and share the
            love with other chefs.</p>

        <p>If you need help getting around the website click here:
            <button id="help" onclick="openHelp()" >Help</button>
        </p>
        <div id="popup"  style="display:none;">
            <div id="helpContainer">
                <button class="close" onclick="openHelp()" id="Xclose">X</button>
                <h2>Help</h2>
                <p>Hello there! It seems like you might need some help getting around here? No worries. Here is a complete list
                    of pages on this website and how to get navigate them. I hope this helps and that you can find
                    your perfect recipe to cook! Thank you for visiting Pronto!</p>
                <p>Clicking the "Pronto!" logo or the "Home" button on the navbar menu will redirect you to
                    <a href="index.html">Pronto!'s home page</a>.In this page you can filters and keywords to help you find the desired recipe.
                </p>
                <p>The
                    <a href="about.html">About</a> button will bring you to a page with a information about the website.
                </p>
                <p>The
                    <a href="recipes.html">Recipes</a> button will redirect you to the website's full catalog of recipes.</p>
                <p>You can also search for a recipe at any moment by using the searchbar positioned in the header of the website.
                    All you need to do is click on the typebox and write a keyword for the recipe you are looking for. Click
                    "Submit" and you will be redirected to the "Reipes" page with the filtered results of all recipes containing
                    that word or that are tagged with it.</p>
                <button class="close" onclick="openHelp()">Click here to close the help dialog box</button>
            </div>
        </div>

        <p>Ok, ok... you caught me! This is a school project, and these provided recipes, yeeess.... But you can still do everything
            you said you could and use this website as a reference for recipes.
            <br> This is a project for my programming 2 class at Drexel, where I currently study Interactive Digital Media.
            <br> If you are interested in my work here is my website:
            <a href="http://melgross.net"><button>melgross.net</button></a> :)</p>

    </div>
</main>
</body>
</html>
<script>
    // When the user clicks on help button, open the help popup
    function openHelp() {
        var popup = document.getElementById("popup");
        if (popup.style.display === "none") {
        popup.style.display = "block";
        console.log('element to block');
    } else {
        popup.style.display = "none";
        console.log('element to none');
    }
        
    }
</script>
<?php
// Create database connection
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "pronto";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check for connection errors
if (mysqli_connect_errno()) {
		die ("Database connection failed: " .
				mysqli_connect_error() .
				" (" . mysqli_connect_errno() . ")"
		);
}
//Database Query
	$table = "main";
	$query = "SELECT * FROM {$table}";
	$result = mysqli_query($connection, $query);
// Check for SQL errors
	if (!$result) {
			die ("Database query failed.");
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
    <?php while ($row = mysqli_fetch_assoc($result)); 
     include 'header-include.php'; ?>
    //Include header.php?>
 <main>
        <div class="RecipeHeader">
            <img src="assets\350x125.png" alt="Recipe Picture" class="recipeMainPic">
            <h1 class="title"><?php echo $row['title']; ?></h1>
            <h2 class="subtitle"><?php echo $row['subtitle']; ?></h2>
            <p class="tags"><?php echo $row['tag']; ?></p> 
            <!-- needs to be a number of tags, and grabing from the tag table -->
            <div class="description-container">
                <p class="description"><?php echo $row['description']; ?></p>
            </div>
        </div>
        <a href="#" class="menu-toggle"></a>
        <span class="fa fa-bars" aria-hidden="true"></span>
        <h1 class="logo">ingredients</h1>
        <div class="ingredients">
            <!-- need to grab from ingredient table, a number of items -->
            <ul>
                <li>Lorem, ipsum.</li>
                <li>Nihil, saepe?</li>
                <li>Ea, ratione!</li>
                <li>Quaerat, amet.</li>
                <li>Quis, beatae!</li>
            </ul>
        </div>
        <div class="instructions">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, excepturi, accusantium animi ipsa voluptatibus
                possimus asperiores aspernatur saepe itaque voluptate est sequi, eligendi obcaecati recusandae? Nobis nemo
                sed tempora aspernatur.</p>
            <p>Ullam dolores eveniet cum a itaque laudantium repellat ad pariatur numquam maxime. Possimus cupiditate impedit
                minus assumenda iste! Non odit mollitia fugit pariatur laboriosam veritatis nostrum nesciunt nisi dicta hic.</p>
            <p>Eaque consequuntur at sequi quaerat placeat incidunt ab, ad molestias facilis provident officia dolorum ipsam
                sint. Voluptate nam ducimus nulla error amet, harum officia nobis reprehenderit velit consequuntur dicta
                neque.</p>
            <p>Enim deleniti architecto, eligendi nulla ipsum in perferendis? Provident, illum. Vero, at quis? Harum enim consequatur
                ipsam nihil doloremque, reiciendis atque nobis laudantium nemo nesciunt obcaecati dolores culpa. Recusandae,
                atque!</p>
            <p>Obcaecati ab praesentium, porro a commodi quas iste! Inventore rerum laboriosam impedit corporis ad suscipit,
                quam provident nostrum quas laudantium, voluptatibus saepe blanditiis, minus modi eius voluptates hic! Id,
                labore.</p>
            <p>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, alias mollitia odio distinctio eligendi commodi,
                    modi ab excepturi aspernatur repellat similique qui, ex laudantium molestias quaerat. Praesentium laboriosam
                    ex rerum.</span>
                <span>Molestiae veritatis nesciunt tenetur corporis deleniti, illo itaque vero quidem sequi, soluta aperiam quis
                    maxime! Quod aut dolorum vel natus amet quisquam incidunt consequuntur, quibusdam magnam in doloribus
                    necessitatibus sed?</span>
                <span>Architecto inventore aliquid nisi voluptate aut eaque voluptatem magni blanditiis quam corporis, ad repellendus
                    perspiciatis? Repellendus quisquam porro autem quasi rem libero aspernatur, facere alias iste sapiente
                    fugit expedita ut.</span>
            </p>
        </div>
    </main>
                    // include footer.php 
                <?php require 'footer-include.php';?>
    </body>

    </html>

// php closing the connection 
    <?php
			}
// Release Returned Data
			mysqli_free_result($result);
// Close Connection
			mysqli_close($connection);
?>
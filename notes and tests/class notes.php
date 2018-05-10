<?php 
/*if it is set logical operatot*/
if (!isset($e)) {
  $e = 200;
}
echo $e;

/*empty and is numeric logical operations*/
$quantity = 0;

if (empty($quantity) && !is_numeric($quantity)) {
  echo "You must enter a value";
}

/*switch statements//kinda like if statements*/
$user_type = "customer";

switch ($user_type) {
  case "student":
    echo "Welcome!";
    break;
  case "press":
  case "customer":
  case "admin":
    echo "Hello!";
    break;
}

/*while loop*/
$number = 0;
while ($number <= 20) {
  echo "<p>{$number}: ";

  if ($number % 2) echo "is odd";
  else echo "is even";

  echo "</p>";
  $number++;
}

/*for loops: does it for a set number of times*/
for ($count = 0; $count <= 10; $count++) {
  if ($count % 2 == 0 )
    echo "{$count} is even.<br>";
  else
    echo "{$count} is odd.<br>";
}

/*foreach loop: stops when everything is done. also used with objects*/
$prices = [
  "Brand New Computer" => 2000,
  "1 month of music" => 10,
  "Learning PHP" => NULL
];

foreach ($prices as $item => $price) {
  echo "{$item}: ";
  if (is_int($price)) echo "$" . $price;
  else echo "priceless";
  echo "<br>";
}

/*continue: moves on to the 



?>
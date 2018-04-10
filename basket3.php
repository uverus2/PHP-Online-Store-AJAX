<?php
session_start();
include('functions.php');
error_reporting(0);
$session = $_SESSION["gatekeeper"];

if ( !isset ($_SESSION["gatekeeper"]))
{
    echo "You're not logged in. Please log in here <a href='login.php'> here!";
}
else
{  

    $database = connect();

    $result = $database->query("SELECT b.username, b.ID, b.productID, b.qty,  p.name,p.manufacturer, p.price, p.stocklevel, p.agelimit FROM basket b  LEFT JOIN products p ON b.productID = p.ID WHERE b.username = '$session' ");






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logged IN Home</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<div class="grid">

        <header>
            <img class="logo" src="img/logo.png" alt="Logo">
            <a class="button1 ghost-button-full-color" href="index.php">Home</a>
            <a class="button2 ghost-button-full-color" href="search.php">Search</a>
        </header>

 <?php include 'header.php';?>

 <?php

 echo "<section class='searchOver'>";

 
    echo "<div >";
     while($row=$result->fetch())
         {
             echo "<p class='basket'>";
             echo " ID: ". $row["ID"] ."<br/> ";
             echo " Product ID: ". $row["productID"] ."<br/> ";
             echo " Customer: " . $row["username"] . "<br/> " ;
             echo " Quantity: " . $row["qty"] . "<br/> " ;
             echo " Product Name: " . $row["name"] . "<br/> " ;
             echo " Product Manufacturer: " . $row["manufacturer"] . "<br/> " ;
             echo " Product Price: " .$row["price"]. "<br/>" ;
             echo " Product Stock Level: " . $row["stocklevel"] . "<br/> " ;
             echo " Age limit of product: " . $row["agelimit"] . "<br/> " ;
             echo "<a href='removeBasket.php?ID=" . $row["ID"] . "'> Remove from Basket </a><br />";
             echo "</p>";
         }
         echo "</div>";

         echo "<button class='size'><a href='buy.php?ID=" . $row["ID"] . "'> Checkhout </a><br /> </button>";
         

 echo "</section>";


?>


 <?php include 'footer.php';?>




</div>
    
</body>
</html>


<?php
}
?>
<?php
session_start();
error_reporting(0);
include('functions.php');
$session = $_SESSION["gatekeeper"];


if ( !isset ($_SESSION["gatekeeper"]))
{
    echo "You're not logged in. Please log in here <a href='login.php'> here !";
}
else
{  

    $productID = $_GET["ID"];
   

  


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
            <a class="button2 ghost-button-full-color" href="search.php">Go back</a>
        </header>

 <?php include 'header.php';?>

 <?php    
 
    echo "<section>";
    echo " <div class='form-style-6'>";
    echo "<h1>Enter Product Quantity </h1>";
    echo "<form method='post' action='basket2.php'>";
    echo "<input type='number' name='qty' placeholder='Qty' required />";
    echo "<input type='hidden' name='productID'  value='$productID' /> ";
    echo "<input type='submit' value='Add to Basket' />";

    echo "</form>";

    echo "</div>";

    echo "</section>";
?>

 <?php include 'footer.php';?>




</div>
    
</body>
</html>


<?php
}
?>
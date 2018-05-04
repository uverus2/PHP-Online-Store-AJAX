<?php
session_start();
include('functions.php');
$session = $_SESSION["gatekeeper"];
error_reporting(0);

$database=connect();

if ( !isset ($_SESSION["gatekeeper"]))
{
    echo "You're not logged in. Please log in here <a href='login.php'> here!";
}
else
{  

   $di= htmlentities($_GET["search"]);

   $database = connect();

   $one = '%' .$di. '%';

   $resultss = $database->prepare("SELECT * FROM products WHERE name LIKE :name ");
   $resultss->bindParam(":name",$one );
   $resultss->execute();
   $row= $resultss->fetch();

   if ($row==false) {


    echo "<h2> No such product was found. Have a look at our other stock </br> </h2>";
     $resultss = $database->query("SELECT * FROM products");

    $row = $resultss->fetch();
     
    }

    $users = $database->prepare("SELECT * FROM users WHERE username = :username ");
    $users->bindParam(":username", $session);
    $users->execute();
    $age=$users->fetch();

    $day=$age["dayofbirth"];
    $month=$age["monthofbirth"];
    $year=$age["yearofbirth"];

   

    $birthday= mktime(0,0,0,$month,$day,$year);

    $difference = time() - $birthday;
    
    $userAge = floor($difference / 31556926) ;



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
            <a class="button2 ghost-button-full-color" href="basket3.php">View Basket</a>
        </header>

 <?php include 'header.php';?>



<?php

    echo "<section class='over'>";

        while($row!=false)
            {
                echo "<p>";
                echo " ID: ". $row["ID"] ."<br/> ";
                echo " Product Name: " .$row["name"]. "<br/>" ;
                echo " Product Manufacturer: " . $row["manufacturer"] . "<br/> " ;
                echo " Product Description: " . $row["description"] . "<br/> " ;
                echo " Product Price: " .$row["price"]. "<br/>" ;
                echo " Product Stock Level: " . $row["stocklevel"] . "<br/> " ;
                echo " Age limit of product: " . $row["agelimit"] . "<br/> " ;

                $stock = $row["stocklevel"];
                $pAge = $row["agelimit"];

            if($stock > 0 && $pAge < $userAge ) {

                echo "<a href='basket.php?ID=" . $row["ID"] . "'> Add to Basket </a><br />";
                echo "</p>";
            }
            else if ($pAge > $userAge){
                echo "Not old enough";
            }
            else {
                echo "Out of stock";
            } 
        }
    
       
           

    echo "</section>";
?>







        <?php include 'footer.php';?>




</div>
    
</body>
</html>


<?php
}
?>
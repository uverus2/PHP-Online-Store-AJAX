<?php
session_start();
include('functions.php');
$database=connect();


if ( !isset ($_SESSION["gatekeeper"]))
{
    echo"<h1>Your Basket</h1>";
    echo "To add items to your basket please <a href='login.php'> Log In First";
}
else
{  
    $session = $_SESSION["gatekeeper"];

    $result = $database->prepare("SELECT b.username, b.ID, b.productID, b.qty, p.name,p.manufacturer, p.price, p.stocklevel, p.agelimit FROM basket b  LEFT JOIN products p ON b.productID = p.ID WHERE b.username =:username ");
    $result->bindParam(":username", $session);
    $result->execute();
        
    echo"<h1>Your Basket</h1>";
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
             echo "<a href='#' onclick='remove(".$row["ID"].")'> Remove from basket </a><br />";
             echo "</p>";
         }
         echo "<a href='basket3.php'> Checkout here  </a> ";
        }

       
?>
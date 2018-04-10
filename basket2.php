<?php
session_start();
error_reporting(0);
include('functions.php');
$session = $_SESSION["gatekeeper"];

$database=connect();

if ( !isset ($_SESSION["gatekeeper"]))
{
    echo "You're not logged in. Please log in here <a href='login.php'> here!";
}
else
{  

    $productID = htmlentities($_POST["productID"]);
    $qty = htmlentities($_POST["qty"]);

    $productsQty=$database->query(" SELECT * FROM products WHERE ID = '$productID' ");

    $row=$productsQty->fetch();

    $stocklevel = $row["stocklevel"];

    if($qty>$stocklevel){
        echo "The specified quantity is bigger than the stock of the product currently in store. Please select lower quantity value. <a href='basket.php'> Go Back </a><br />";

    }
    else {
    $results=$database->query(" INSERT INTO basket ( productID, username, qty) VALUES ('$productID','$session','$qty')");

    $products=$database->query(" UPDATE products SET stocklevel=stocklevel-'$qty' WHERE ID = '$productID' ") ;

    header('Location:basket3.php');
}
   
}

?>
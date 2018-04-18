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

    $productID = htmlentities($_GET["ID"]);
    $qty = htmlentities($_GET["qty"]);

    $productsQty=$database->prepare(" SELECT * FROM products WHERE ID = :productID ");
    $productsQty->bindParam(":productID", $productID);
    $productsQty->execute();

    $row=$productsQty->fetch();

    $stocklevel = $row["stocklevel"];

    if($qty<1){
        echo "Enter a valid quantity";

    }
    else {

    if($qty>$stocklevel){
        echo "The specified quantity is bigger than the stock of the product currently in store. Please select lower quantity value. <a href='basket.php'> Go Back </a><br />";

    }
    else {

    $results=$database->prepare(" INSERT INTO basket ( productID, username, qty) VALUES (:productID,:username,:qty)");
    $results->bindParam(":productID", $productID);
    $results->bindParam(":username", $session);
    $results->bindParam(":qty", $qty);
    $results->execute();
    

    $products=$database->prepare(" UPDATE products SET stocklevel=stocklevel-:qty WHERE ID = :productID ");
    $products->bindParam(":productID", $productID);
    $products->bindParam(":qty", $qty);
    $products->execute();

    header('Location:ajaxbasket3.php');
}
   
}}

?>
<?php 

session_start();
include('functions.php');
$session = $_SESSION["gatekeeper"];
$allow = htmlentities($_GET["ID"]);

$database = connect();

$results = $database->prepare("SELECT * FROM basket WHERE username=:username");
$results->bindParam(":username", $session);
$results->execute();

$row =$results->fetch();



$qty = $row["qty"];
$productID = $row["productID"];

$resulti = $database->prepare("SELECT * FROM products WHERE ID=:product");
$resulti->bindParam(":product", $productID);
$resulti->execute();

while ($row2 = $resulti->fetch()) {

$resul = $database->prepare("UPDATE products SET stocklevel=stocklevel+:qty WHERE ID=:product");
$resul->bindParam(":qty", $qty);
$resul->bindParam(":product", $productID);
$resul->execute();
}

$result = $database->prepare("DELETE FROM basket WHERE username=:username");
$result->bindParam(":username", $session);
$result->execute();



echo "Purchase was successful. Thank you for choosing Solent Stores. Get back to <a href='search.php'>Search</a> ";

?>



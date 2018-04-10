<?php 

session_start();
include('functions.php');
$session = $_SESSION["gatekeeper"];
$allow = htmlentities($_GET["ID"]);

$database = connect();



$result = $database->query("DELETE FROM basket WHERE username='$session'");

echo "Purchase was successful. Thank you for choosing Solent Stores. Get back to <a href='search.php'>Search</a> ";

?>



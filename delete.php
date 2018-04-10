<?php 

session_start();
if (isset($_SESSION["isadmin"]) && $_SESSION["isadmin"] == 1 )
{

   
include('functions.php');

$getID = htmlentities($_POST["id"]);

connect();
$results =  connect()->query("DELETE FROM products WHERE ID = '$getID'");

echo "Product Deleted";

}
else {
    echo" Error Action can only be performed by an Admin ";
}
?>

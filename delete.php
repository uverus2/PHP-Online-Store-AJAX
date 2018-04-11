<?php 

session_start();
if (isset($_SESSION["isadmin"]) && $_SESSION["isadmin"] == 1 )
{

   
include('functions.php');

$getID = htmlentities($_POST["id"]);

$database = connect();
$results = $database->prepare("DELETE FROM products WHERE ID = :delete");
$results->bindParam(":delete", $getID);
$results->execute();

echo "Product Deleted";

}
else {
    echo" Error Action can only be performed by an Admin ";
}
?>

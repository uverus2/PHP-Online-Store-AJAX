<?php
session_start();
include('functions.php');
$session = $_SESSION["gatekeeper"];

if ( !isset ($_SESSION["gatekeeper"]))
{
    echo "You're not logged in. Please log in here <a href='login.php'> here !";
}
else
{

    $basketID = htmlentities($_GET["ID"]);


    $results = connect()->query(" SELECT * FROM basket WHERE ID = '$basketID' ");

    $row=$results->fetch();
    $qty = $row["qty"];


    if ($qty >= 2) {
        $result = connect()->query(" UPDATE basket SET qty=qty-1 WHERE ID = '$basketID'");
    }
    else {
        $resul = connect()->query(" DELETE FROM basket WHERE ID = '$basketID'");
    }

    header('Location:basket3.php');
}

?>
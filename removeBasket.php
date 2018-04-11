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
    $database = connect();

    $results =$database->prepare(" SELECT * FROM basket WHERE ID =:basketID ");
    $results->bindParam(':basketID', $basketID);
    $results->execute();

    $row=$results->fetch();
    $qty = $row["qty"];


    if ($qty >= 2) {
        $result =$database->prepare(" UPDATE basket SET qty=qty-1 WHERE ID =:basketID");
        $result->bindParam(":basketID", $basketID);
        $result->execute();
    }
    else {
        $resul =$database->prepare(" DELETE FROM basket WHERE ID = :basketID");
        $resul->bindParam(":basketID", $basketID);
        $resul->execute();
    }

    header('Location:basket3.php');
}

?>
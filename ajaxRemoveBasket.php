<?php 


include('functions.php');
    $basketID = htmlentities($_GET["ID"]);
 
    $database = connect();

    $results =$database->prepare(" SELECT * FROM basket WHERE ID =:basketID ");
    $results->bindParam(':basketID', $basketID);
    $results->execute();

    
    

    $row=$results->fetch();
    $qty = $row["qty"];
    $productID = $row["productID"];
  

    if ($qty >= 2) {
        $result =$database->prepare(" UPDATE basket SET qty=qty-1 WHERE ID =:basketID");
        $result->bindParam(":basketID", $basketID);
        $result->execute();

        $resu =$database->prepare(" UPDATE products SET stocklevel=stocklevel+1 WHERE ID =:productID");
        $resu->bindParam(":productID",  $productID);
        $resu->execute();
    }
    else {
        $resul =$database->prepare(" DELETE FROM basket WHERE ID = :basketID");
        $resul->bindParam(":basketID", $basketID);
        $resul->execute();

        $resu =$database->prepare(" UPDATE products SET stocklevel=stocklevel+1 WHERE ID =:productID");
        $resu->bindParam(":productID",  $productID);
        $resu->execute();

    }

    header('Location:ajaxbasket3.php');


?>
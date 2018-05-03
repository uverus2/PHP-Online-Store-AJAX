<?php

session_start();
include('functions.php');

    $name= htmlentities($_POST["name"]);
    $manufacturer= htmlentities($_POST["manufacturer"]);
    $description= htmlentities($_POST["description"]);
    $price= htmlentities($_POST["price"]);
    $stock= htmlentities($_POST["stocklevel"]);
    $age= htmlentities($_POST["agelimit"]);


    $database = connect();
    
    
    $results =$database ->prepare(" INSERT INTO products (name,manufacturer, description , price, stocklevel, agelimit) VALUES (:name ,:manufacturer, :description,:price,:stock,:age)");
    $results->bindParam(":name", $name);
    $results->bindParam(":manufacturer", $manufacturer);
    $results->bindParam(":description", $description);
    $results->bindParam(":price", $price);
    $results->bindParam(":stock", $stock);
    $results->bindParam(":age", $age);
    $results->execute();

    echo "<p> Product added succesfully please go back to <a href='index.php'> home </a>  </p>"

?>
<?php

session_start();
include('functions.php');

    $name= htmlentities($_POST["name"]);
    $manufacturer= htmlentities($_POST["manufacturer"]);
    $description= htmlentities($_POST["description"]);
    $price= htmlentities($_POST["price"]);
    $stock= htmlentities($_POST["stocklevel"]);
    $age= htmlentities($_POST["agelimit"]);


  
    
    
    $results = connect()->query(" INSERT INTO products (name,manufacturer, description , price, stocklevel, agelimit) VALUES ('$name' , '$manufacturer',' $description','$price','$stock','$age')");


    

   

    


    


?>
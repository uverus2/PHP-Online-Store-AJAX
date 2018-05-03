<?php

session_start();
error_reporting(0);
include('functions.php');
$session = $_SESSION["gatekeeper"];

   $di= htmlentities($_GET["search"]);



   $database = connect();

   $resultss = $database->query("SELECT * FROM products WHERE name LIKE '%$di%'");
   $row= $resultss->fetch();


   if ($row==false) {


        echo "<h2> No such product was found. Have a look at our other stock </br> </h2>";
         $resultss = $database->query("SELECT * FROM products");

        $row = $resultss->fetch();
         
        }


   /*
    else {

        
        $results=$database->prepare("SELECT * FROM products WHERE name LIKE %:name%");
        $results->bindParam(':name', $di);
        $results->execute();
    };
    */

    $users = $database->prepare("SELECT * FROM users WHERE username = :username ");
    $users->bindParam(":username", $session);
    $users->execute();
    $age=$users->fetch();

    $day=$age["dayofbirth"];
    $month=$age["monthofbirth"];
    $year=$age["yearofbirth"];

   

    $birthday= mktime(0,0,0,$month,$day,$year);

    $difference = time() - $birthday;
    
    $userAge = floor($difference / 31557600) ;


   

    
    echo "<h1> Our Products </h1>";

    
        while($row!=false)
            {
                echo "<p>";
                echo " ID: ". $row["ID"] ."<br/> ";
                echo " Product Name: " .$row["name"]. "<br/>" ;
                echo " Product Manufacturer: " . $row["manufacturer"] . "<br/> " ;
                echo " Product Description: " . $row["description"] . "<br/> " ;
                echo " Product Price: " .$row["price"]. "<br/>" ;
                echo " Product Stock Level: " . $row["stocklevel"] . "<br/> " ;
                echo " Age limit of product: " . $row["agelimit"] . "<br/> " ;

    
                if ( isset ($_SESSION["gatekeeper"]))
                    {

                    
                     
                $stock = $row["stocklevel"];
                $pAge = $row["agelimit"];

            if($stock > 0 && $pAge < $userAge ) {

                echo "<input type='number' value='1' id='qty".$row["ID"]."'>";
                echo "<a href='#' onclick='add(".$row["ID"].")'> Add to basket </a><br />";
                echo "</p>";
            }
            else if ($pAge > $userAge){
                echo "Not old enough";
            }
            else {
                echo "Out of stock";
            } 
            }
               $row = $resultss->fetch();
            }
        



  
?>
    



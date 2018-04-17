<?php    
 
 echo "<section>";
 echo " <div class='form-style-6'>";
 echo "<h1>Enter Product Quantity </h1>";
 echo "<form method='post' action='basket2.php'>";
 echo "<input type='number' name='qty' placeholder='Qty' required />";
 echo "<input type='hidden' name='productID'  value='$productID' /> ";
 echo "<input type='submit' value='Add to Basket' />";

 echo "</form>";

 echo "</div>";

 echo "</section>";
?>
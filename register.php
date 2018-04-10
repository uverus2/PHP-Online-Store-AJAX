<?php


session_start();

include('functions.php');


$name= htmlentities($_GET["username"]);
$pass= htmlentities($_GET["password"]);
$day= htmlentities($_GET["dayofB"]);
$month= htmlentities($_GET["mounthofB"]);
$year= htmlentities($_GET["yearofB"]);


connect();
$results = connect()->query(" INSERT INTO users (username,password, isadmin , dayofbirth, monthofbirth, yearofbirth) VALUES ('$name' ,'$pass',0,'$day','$month','$year')");

echo "registration successful please <a href='login.php'> log in </a>"


?>
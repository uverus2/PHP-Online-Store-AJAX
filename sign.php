<?php 
include('functions.php');
$usernames = $_POST["username"];
$passwords = $_POST["password"];

session_start();

connect();
$results =  connect()->query
("select * from users where username = '$usernames' AND password = '$passwords'");
 
 
$loginRow=$results->fetch();

if ($loginRow != false) 
{

        $_SESSION["gatekeeper"] = $usernames;
        $_SESSION["isadmin"] = $loginRow["isadmin"];
        header("Location: index.php");

}
else
{
    echo "Incorrect  username or password please register <a href='singup.php'> here </a> ";
}


?>
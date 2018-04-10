<?php
session_start();
error_reporting(0);
include('functions.php');
connect();
$session = $_SESSION["gatekeeper"];
// Test that the authentication session variable exists
if ( !isset ($_SESSION["gatekeeper"]))
{
    echo "You're not logged in. Please log in here <a href='login.php'> here !";
}
else
{    
    

   
    

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logged IN Home</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<div class="grid">

        <header>
            <img class="logo" src="img/logo.png" alt="Logo">
            <a class="button1 ghost-button-full-color" href="logout.php">Log out</a>
            <a class="button2 ghost-button-full-color" href="setting.php">Settings</a>
        </header>

        <?php include 'header.php';?>

        <section>


        <form class="formGrid" method="get" action="search.php">
            <h1 class="text1">Search our products...</h1>
            <input class="search1" type="text" name="search">
            <input type="image" value="search" class="magnify" src="img/if_icon-111-search_314478.png">
        </form>

        <div class="cover">


        </div>

    </section>


        <?php include 'footer.php';?>




</div>
    
</body>
</html>






<?php
}
?>
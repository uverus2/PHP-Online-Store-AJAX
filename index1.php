<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <div class="grid">

        <header>
            <img class="logo" src="img/logo.png" alt="Logo">
            <a class="button1 ghost-button-full-color" href="login.php">Log in</a>
            <a class="button2 ghost-button-full-color" href="">Settings</a>
        </header>

        <main>
<img class="avatar" src="img/if_30.User_290120.png" alt="Avatar">
<p class="signedIn"> Not logged in</p>
</main>

        <section>


            <form class="formGrid" method="get" action="search2.php">
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
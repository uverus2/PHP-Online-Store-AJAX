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

        <div class="form-style-6">
        <h1>Enter SearchCars.com</h1>
        <form action="register.php" id="formss" method="get">

            <input type="text" name="username" placeholder="Username" required />
            <input type="text" name="password" placeholder="Password" required />
            <input type="number" name="dayofB" placeholder="Day of Birth" required />
            <input type="number" name="mounthofB" placeholder="Birth Mouth" required />
            <input type="number" name="yearofB" placeholder="Birth Year" />


            <input type="submit" value="Register" />

        </form>

        <p>
            <a class="linking" href="login.php"> Log In</a>
        </p>

        <p>
            <a class="linking" href="alanding.html"> Go back </a>
        </p>
    </div>

        </section>


        <?php include 'footer.php';?>




    </div>

</body>

</html>
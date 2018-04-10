<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>

    <link rel="stylesheet" href="css/main.css">
</head>

<body>

        <div class="grid">

                <header>
                    <img class="logo" src="img/logo.png" alt="Logo">
                    
                    <a class="button2 ghost-button-full-color" href="index1.php">Home</a>
                    
                </header>
        
                <main>
<img class="avatar" src="img/if_30.User_290120.png" alt="Avatar">
<p class="signedIn"> Not logged in</p>
</main>


                <section>

                <div class="form-style-6">
        <h1>Enter Solent Stores</h1>
        <form method="post" action="sign.php">
            <input type="text" name="username" placeholder="Username" required />
            <input type="text" name="password" placeholder="Password" required />
            <input type="submit" value="Log In" />

        </form>

        <p>
            <a class="linking" href="singup.php"> Register Here</a>
        </p>

        <p>
            <a class="linking" href="alanding.html"> Go back </a>
        </p>
    </div>

                </section>


                <?php include 'footer.php';?>

</body>

</html>
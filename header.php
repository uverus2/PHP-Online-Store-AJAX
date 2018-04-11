<?php



$results = connect()->prepare("SELECT username FROM users WHERE username =:name  ");
$results->bindParam(':name', $session);
$results->execute();
$row=$results->fetch();


echo "<main>
<img class='avatar' src='img/if_30.User_290120.png' alt='Avatar'>
<p class='signedIn'> Signed in as ".$row["username"]. "</p>
</main> ";




?>
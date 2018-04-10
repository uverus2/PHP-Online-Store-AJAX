<?php



$results = connect()->query("select username from users where username = '$session'  ");
$row=$results->fetch();


echo "<main>
<img class='avatar' src='img/if_30.User_290120.png' alt='Avatar'>
<p class='signedIn'> Signed in as ".$row["username"]. "</p>
</main> ";




?>
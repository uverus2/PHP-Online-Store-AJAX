<?php 


session_start();
session_destroy();
unset($_SESSION);
session_write_close();
header('Location:index1.php');
exit;


?>
<?php 

function connect() {
    $conn = new PDO ("mysql:host=localhost;dbname=assign029;", "root", '123456' ); //("mysql:host=localhost;dbname=assign029;", "assign029", 'quaexaiY' );
    return $conn;
} 


?>
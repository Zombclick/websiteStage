<?php
/*
// DB PDO TRY 
 try {
    $conn = new PDO('mysql:host=localhost;dbname=lb_mediatest', 'root', '');
} catch (PDOException $e) {
    print "Connetion Error!: " . $e->getMessage() . "<br/>";
    die();
}
*/

// DB NORMAL TRY

$servername = 'localhost';
$username = 'root';
$password = '';

$conn = mysqli_connect($servername,$username,$password);

if(!$conn){
    die('connection is not connected' . mysqli_connect_error());
}else{
    echo "WE IN!";  
}

?>
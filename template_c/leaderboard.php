<?php

// leaderboard function

include 'C:\xampp\htdocs\Website-Leon(1)\Website\assets\classes\connection.php';
global $conn;

$stmt = $conn->query('SELECT * FROM `users` ORDER BY "user_points";');
$rs = mysqli_query($conn,$sql);
$rsCheck = mysqli_num_rows($rs);

$smarty = new Smarty;
$smarty->assing('selectrs','eske')

?>
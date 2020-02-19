<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="./assets/css/master.css">
<head>

<?php 
    header('Content-Type: text/html; charset=UTF-8');
    
    require_once('C:\xampp\htdocs\SmartyFuckey\assets\smarty\libs\Smarty.class.php');

    $smarty = new Smarty;
    $smarty->template_dir = './foodtable/plate1/home.tpl';
    $smarty->cache_dir = false;
    $smarty->compile_dir = './templates_c';

    $smarty->display('./template/header-loggedout.tpl');   

?>


<!-- Logged in templates 

<div class="fakewindow">
<?php 
/*
$smarty->display('./template/leaderboard.tpl');
$smarty->display('./template/fakewindow/home-loggedin.tpl');
$smarty->display('./template/friendsboard.tpl');
*/
?>
</div>
-->



<?php   
$smarty->display('./template/footer.tpl');
?>

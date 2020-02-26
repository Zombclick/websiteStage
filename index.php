<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="./assets/css/master.css">
<head>

<?php 
    header('Content-Type: text/html; charset=UTF-8');
    
    // Classes loader
 //   include './assets/autoloader.php';

    // Smarty loader
    require_once('C:\xampp\htdocs\Website-Leon(1)\Website\assets\smarty\libs\Smarty.class.php');

    $smarty = new Smarty;
    $smarty->template_dir = './template';
    $smarty->cache_dir = false;
    $smarty->compile_dir = './templates_c';

    // Header template display
    $smarty->display('./template/header-loggedout.tpl');   

?>




<div class="fakewindow">
<?php 
// Mid templalte display - here we going to display Home, Friends, ect...

$smarty->display('./template/leaderboard.tpl');
$smarty->display('./template/fakewindow/home-loggedout.tpl');

?>
</div>


<?php   
// Footer template display with out infomation and such
$smarty->display('./template/footer.tpl');
?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-21 10:57:40
  from 'C:\xampp\htdocs\Website-Leon(1)\Website\template\fakewindow\home-loggedout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4fa9948ca0e7_40627064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26f64d13031e512befa26a5f1faf6e3269986a78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Website-Leon(1)\\Website\\template\\fakewindow\\home-loggedout.tpl',
      1 => 1582279058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4fa9948ca0e7_40627064 (Smarty_Internal_Template $_smarty_tpl) {
?>  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>

  
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="C:\xampp\htdocs\Website-Leon(1)\Website\assets\img\carousel-1.png" alt="carousel-1" style="width:100%;">
      </div>

      <div class="item">
        <img src="C:\xampp\htdocs\Website-Leon(1)\Website\assets\img\carousel-2.png" alt="carousel-2" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="C:\xampp\htdocs\Website-Leon(1)\Website\assets\img\carousel-3.png" alt="carousel-3" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<?php }
}

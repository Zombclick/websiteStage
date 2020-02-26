<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-26 10:04:06
  from 'C:\xampp\htdocs\Website-Leon(1)\Website\template_c\leaderboard.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5634863a7093_92054831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92823a7548ef0f93e70c582d8f7616ff933ed0bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Website-Leon(1)\\Website\\template_c\\leaderboard.php',
      1 => 1582707843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5634863a7093_92054831 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php

';?>
// leaderboard function

include 'C:\xampp\htdocs\Website-Leon(1)\Website\assets\classes\connection.php';
global $conn;

$stmt = $conn->query('SELECT * FROM `users` ORDER BY "user_points";');
$rs = mysqli_query($conn,$sql);
$rsCheck = mysqli_num_rows($rs);

$smarty = new Smarty;
$smarty->assing('selectrs','eske')

<?php echo '?>';
}
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-26 10:21:41
  from 'C:\xampp\htdocs\Website-Leon(1)\Website\template\leaderboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5638a57f0b71_54772936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c5e4673b6b41e8672dc02b8d58fd8ff979cf47f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Website-Leon(1)\\Website\\template\\leaderboard.tpl',
      1 => 1582708899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:C:\\xampp\\htdocs\\Website-Leon(1)\\Website\\template_c\\leaderboard.php' => 1,
  ),
),false)) {
function content_5e5638a57f0b71_54772936 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
ob_start();
$_smarty_tpl->_subTemplateRender('file:C:\xampp\htdocs\Website-Leon(1)\Website\template_c\leaderboard.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->assign('leaderboardfunctions', ob_get_clean());
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


<div class="friends-table sidewindow">
    <div class='users-ranked'>
        <?php $_smarty_tpl->_assignInScope('name', '1. eske');?>
        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

    </div>
</div><?php }
}

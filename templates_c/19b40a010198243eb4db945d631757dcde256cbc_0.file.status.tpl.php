<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-18 10:03:03
  from 'C:\xampp\htdocs\Website-Leon(1)\Website\template\status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4ba847af8913_72213655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19b40a010198243eb4db945d631757dcde256cbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Website-Leon(1)\\Website\\template\\status.tpl',
      1 => 1582015963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4ba847af8913_72213655 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
                <div class="card-header">
                <!-- Need to add username (Username tag) -->
                  Username
                </div>

                <div class="card-body">
                <!-- Need to add smarty txt -->
                  <p class="card-text">SIm still ugly, i will do it better</p> <br>
                 
                    <div class="status-info">
                        <div class="counter-like">
                        <span>
                        <img class="icon-counter" src="./assets/img/like-icon.png">
                        <!--Like Counter Smarty --> 
                        1
                        </span>
                        </div>
                    
                        <div class="counter-comments">
                        <span>
                        <img class="icon-counter" src="./assets/img/comment-icon.png">
                        <!--Comment Counter Smarty -->
                        1    
                        </span>   
                        </div>
                    </div>
        
                  <a href="#" class="btn btn-dark"> <img class="icon" src="./assets/img/like-icon.png"> Like</a>
                  <a href="#" class="btn btn-dark"> <img class="icon" src="./assets/img/comment-icon.png">Comment</a>
                
                </div>
</div>
<?php }
}

<?php
/* Smarty version 3.1.39, created on 2022-12-10 11:20:49
  from 'C:\xampp\htdocs\proiect\templates\main-page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63945d81f2b411_39128391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd87cc5b1b40b7de0d242a6a5d6b88ae399209b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proiect\\templates\\main-page.tpl',
      1 => 1661325542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63945d81f2b411_39128391 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="home row">
    <div class="col-6">
    <a class="item" href="cars.php">
        Masini
    </a>
    </div>
    <div class="col-6">
    <a class="item" href="users.php">
        Utilizatori
    </a>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

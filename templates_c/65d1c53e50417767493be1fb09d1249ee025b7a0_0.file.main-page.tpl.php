<?php
/* Smarty version 3.1.39, created on 2022-08-19 16:29:12
  from '/home/robertbr/justin.robertb.ro/templates/main-page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62ff9028708b25_44999241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65d1c53e50417767493be1fb09d1249ee025b7a0' => 
    array (
      0 => '/home/robertbr/justin.robertb.ro/templates/main-page.tpl',
      1 => 1660915700,
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
function content_62ff9028708b25_44999241 (Smarty_Internal_Template $_smarty_tpl) {
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

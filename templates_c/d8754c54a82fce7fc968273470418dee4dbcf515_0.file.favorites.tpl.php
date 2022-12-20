<?php
/* Smarty version 3.1.39, created on 2022-12-10 11:11:00
  from 'C:\xampp\htdocs\proiect\templates\favorites.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63945b34b2a1c7_26138950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8754c54a82fce7fc968273470418dee4dbcf515' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proiect\\templates\\favorites.tpl',
      1 => 1661498319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:pagination.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63945b34b2a1c7_26138950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="favorites">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cars']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>
      <div class="row car">
        <a href="car-page.php?car_id=<?php echo $_smarty_tpl->tpl_vars['car']->value['id'];?>
"><span class="clickable"></span></a>
        <div class="col-3">
        <img class="image" src="images/rover.png" />
        </div>
        <div class="col-6">
            <p class="card-title"><?php echo $_smarty_tpl->tpl_vars['car']->value['brand'];?>
 <?php echo $_smarty_tpl->tpl_vars['car']->value['model'];?>
</p>
            <p class="card-info">
                &#x2022; cai putere:<?php echo $_smarty_tpl->tpl_vars['car']->value['hp'];?>
<br>
                &#x2022; numar de usi: <?php echo $_smarty_tpl->tpl_vars['car']->value['dors'];?>
<br>
                <?php if ($_smarty_tpl->tpl_vars['car']->value['color']) {?>&#x2022; culoare: <?php echo $_smarty_tpl->tpl_vars['car']->value['color'];
}?>
            </p>
        </div>
        <div class="col-3 text-end">
                  <p class="card-price"><?php echo $_smarty_tpl->tpl_vars['car']->value['price'];?>
 EUR</p>
                  <div class="text-end card-fav">
                      <a class="remove-item " href="<?php echo $_smarty_tpl->tpl_vars['APP_WEB_ROOT']->value;?>
/favorites.php?remove=1&car_id=<?php echo $_smarty_tpl->tpl_vars['car']->value['id'];?>
">
                        <i class="fa fa-heart"></i>
                        Scoate de la favorite
                      </a>
                  </div>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php $_smarty_tpl->_subTemplateRender("file:pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

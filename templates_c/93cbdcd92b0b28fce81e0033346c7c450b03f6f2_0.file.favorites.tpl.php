<?php
/* Smarty version 3.1.39, created on 2022-08-21 12:45:05
  from '/home/robertbr/justin.robertb.ro/templates/favorites.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6301fea1d59b82_89110964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93cbdcd92b0b28fce81e0033346c7c450b03f6f2' => 
    array (
      0 => '/home/robertbr/justin.robertb.ro/templates/favorites.tpl',
      1 => 1661074984,
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
function content_6301fea1d59b82_89110964 (Smarty_Internal_Template $_smarty_tpl) {
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
      <div class="row car" style="border: 1px solid gray;">
        <div class="col-3">
          <img class="image" src="images/rover.png" />
        </div>
        <div class="col-6">
            <h1><?php echo $_smarty_tpl->tpl_vars['car']->value['brand'];?>
, <?php echo $_smarty_tpl->tpl_vars['car']->value['model'];?>
</h1>
            <p style="color: gray;">
                &#x2022; cai putere:<?php echo $_smarty_tpl->tpl_vars['car']->value['hp'];?>
<br>
                &#x2022; numar de usi: <?php echo $_smarty_tpl->tpl_vars['car']->value['dors'];?>
<br>
                <?php if ($_smarty_tpl->tpl_vars['car']->value['color']) {?>&#x2022; culoare: <?php echo $_smarty_tpl->tpl_vars['car']->value['color'];
}?>
            </p>
        </div>
        <div class="col-3">
            <h1 style="color:red;"><?php echo $_smarty_tpl->tpl_vars['car']->value['price'];?>
 EUR</h1>
            <div class="text-end" style="margin-top: 10%;">
                <a class="align-self-end tm-2 remove-item" style="color: blue;" href="<?php echo $_smarty_tpl->tpl_vars['APP_WEB_ROOT']->value;?>
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

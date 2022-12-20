<?php
/* Smarty version 3.1.39, created on 2022-08-18 13:58:05
  from '/home/robertbr/justin.robertb.ro/templates/car.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62fe1b3df066d9_99489184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03bdb8707cde0c3523f8b9e2cec1bc930e319e7c' => 
    array (
      0 => '/home/robertbr/justin.robertb.ro/templates/car.tpl',
      1 => 1660820284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_62fe1b3df066d9_99489184 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['this_page_results']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>

  <div class="container-fluid" style="border: 1px solid gray;">
    <div class="d-flex flex-row">
      <img class="img-cars" width="20%" src="images/rover.png">
      <div>
        <h1><?php echo $_smarty_tpl->tpl_vars['car']->value['brand'];?>
, <?php echo $_smarty_tpl->tpl_vars['car']->value['model'];?>
</h1>
        <p style="color: gray;">&#x2022; cai putere:<?php echo $_smarty_tpl->tpl_vars['car']->value['hp'];?>
 <br> &#x2022; numar de usi: <?php echo $_smarty_tpl->tpl_vars['car']->value['dors'];?>
 <br> &#x2022; culoare: <?php echo $_smarty_tpl->tpl_vars['car']->value['color'];?>
</p>
      </div>
      <div class="container text-end">
        <h1 style="color:red;"><?php echo $_smarty_tpl->tpl_vars['car']->value['price'];?>
 EUR</h1>
        <div class="text-end" style="margin-top: 10%;">
        <h2 class="align-self-end tm-2" style="color: blue;"><i class="fa fa-heart"></i>Adauga la favorite</h2>
        </div>
      </div>
        
    </div>
    
  
  </div>

  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}

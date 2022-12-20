<?php
/* Smarty version 3.1.39, created on 2022-08-21 12:43:59
  from '/home/robertbr/justin.robertb.ro/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6301fe5f985703_54596280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88fae13335ee69d25b58545a493ab1118ecc3057' => 
    array (
      0 => '/home/robertbr/justin.robertb.ro/templates/index.tpl',
      1 => 1661074983,
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
function content_6301fe5f985703_54596280 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="containter-fluid" style="background-image: url(images/background.png);" >
    <div class="row text-center">
        <h1>AUTO SHARE</h1>
    </div>
    <div class="row justify-content-evenly" style="background: linear-gradient(90deg, rgba(172, 188, 188, 0.126) 0%, rgba(255,255,255,1) 100%); border-radius: 20px; margin-top: 100px;" >
        <div class="col-xxl-4 text-center h-50" >
            <img class="car-image" src="/images/rover.png" width="100%" >
        </div>
        <div class="col-xxl-4 h-50">
            <p class="fs-1 fw-bolder text-center p-3" style=" margin: 10%; border-radius: 20px;">
            Bine ati venit pe pagina magazinului nostru! Aici puteti gasi masina dorita! 
            </p>
        </div>
    
    </div>
    <div class="row justify-content-evenly p-3" style="margin-top: 100px;">
        <div class="col-xxl-4 text-center h-50">
        <p class="fs-1 fw-bolder text-center p-3" style=" margin: 10%; border-radius: 20px;">
            Puteti creea un anunt pentru propria masina!
        </p>
        <button type="button" class="btn btn-info" href="register.php">Incepeti</button>
        </div>
        <div class="col-xxl-4 h-50">
            <img  src="/images/carSale.png" width="100%" >
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

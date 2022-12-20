<?php
/* Smarty version 3.1.39, created on 2022-12-10 11:25:20
  from 'C:\xampp\htdocs\proiect\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63945e90433c91_73174775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6c0928c7b5e320bc995d0a06a42d14aa4cbcbfd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proiect\\templates\\index.tpl',
      1 => 1670667911,
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
function content_63945e90433c91_73174775 (Smarty_Internal_Template $_smarty_tpl) {
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
            <img class="car-image" src="<?php echo $_smarty_tpl->tpl_vars['APP_WEB_ROOT']->value;?>
/images/rover.png" width="100%" >
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
        <button type="button" class="btn btn-info" href="register.php">Creati un Anunt</button>
        </div>
        <div class="col-xxl-4 h-50">
            <img  src="<?php echo $_smarty_tpl->tpl_vars['APP_WEB_ROOT']->value;?>
/images/carSale.png" width="100%" >
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

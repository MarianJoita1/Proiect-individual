<?php
/* Smarty version 3.1.39, created on 2022-12-05 09:33:33
  from 'C:\xampp\htdocs\proiect\templates\car.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_638dacddf26db2_88418766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a91a00ed11597e6f69c0bf198bc9a8fddd433a4b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proiect\\templates\\car.tpl',
      1 => 1661428815,
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
function content_638dacddf26db2_88418766 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
  <div class="col-2"></div>
  <div class="col-8">
  <div class="car-carousel">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/carSale.png" class="d-block w-100" alt="first">
        </div>
        <div class="carousel-item">
          <img src="images/rover.png" class="d-block w-100" alt="second">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>



    <div class="car-info text-center">
      <div class="car-info-row"><?php echo $_smarty_tpl->tpl_vars['car']->value['brand'];?>
 <?php echo $_smarty_tpl->tpl_vars['car']->value['model'];?>
</div>
      <div class="card-price car-info-row"><?php echo $_smarty_tpl->tpl_vars['car']->value['price'];?>
 EUR</div>
      <div class="text-center contact">
      <button type="button" class="btn btn-success contact"><i class="fa fa-phone-o">Contact</i></button>
      <p class="address"><?php if ($_smarty_tpl->tpl_vars['user']->value['email']) {?> <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
 <?php } else { ?> nu s-a gasit un email <?php }?></p>
      </div>
    </div>

  </div>



  <div class="car-details">
    <h2>Detalii</h2>

    <?php if ($_smarty_tpl->tpl_vars['car']->value['hp']) {?><p>Cai putere      <span class="text-info"><?php echo $_smarty_tpl->tpl_vars['car']->value['hp'];?>
</span></p><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['car']->value['cc']) {?><p>Capacitate      <span class="text-info"><?php echo $_smarty_tpl->tpl_vars['car']->value['cc'];?>
</span></p><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['car']->value['dors']) {?><p>numar usi     <span class="text-info"><?php echo $_smarty_tpl->tpl_vars['car']->value['dors'];?>
</span></p><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['car']->value['color']) {?><p>culoare      <span class="text-info"><?php echo $_smarty_tpl->tpl_vars['car']->value['color'];?>
</span></p><?php }?>
  </div>
  </div>

  <div class="col-2"></div>
</div>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

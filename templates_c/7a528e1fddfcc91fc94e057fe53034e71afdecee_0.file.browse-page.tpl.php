<?php
/* Smarty version 3.1.39, created on 2022-08-26 17:30:48
  from 'C:\xampp\htdocs\proiect-practica\templates\browse-page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6308e7281dda12_00328293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a528e1fddfcc91fc94e057fe53034e71afdecee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proiect-practica\\templates\\browse-page.tpl',
      1 => 1661527844,
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
function content_6308e7281dda12_00328293 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="cars-front">
    <form  action="browse-page.php" method="POST">
    <label for="brand_id">Marca:</label>
    <select name="brand_id" class="form-control"> 
        <option value="0" selected="selected">Toate</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['brand']->value['id'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['brand_id']->value)) && $_smarty_tpl->tpl_vars['brand_id']->value == $_smarty_tpl->tpl_vars['brand']->value['id']) {?> selected='selected' <?php }?>><?php echo $_smarty_tpl->tpl_vars['brand']->value['name'];?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </select>
    <button type="submit" class="btn btn-secondary" name="filter">Filtreaza</button>
    </form>
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
                <img class="image" src="<?php echo $_smarty_tpl->tpl_vars['APP_WEB_ROOT']->value;?>
/images/rover.png" />
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
                      <a class="add-to-wishlist " href="<?php echo $_smarty_tpl->tpl_vars['APP_WEB_ROOT']->value;?>
/favorites.php?car_id=<?php echo $_smarty_tpl->tpl_vars['car']->value['id'];?>
">
                          <i class="fa <?php if ((isset($_smarty_tpl->tpl_vars['wishlistIDS']->value)) && in_array($_smarty_tpl->tpl_vars['car']->value['id'],$_smarty_tpl->tpl_vars['wishlistIDS']->value)) {?>fa-heart<?php } else { ?>fa-heart-o<?php }?>"></i>
                          <span>
                              <?php if ((isset($_smarty_tpl->tpl_vars['wishlistIDS']->value)) && in_array($_smarty_tpl->tpl_vars['car']->value['id'],$_smarty_tpl->tpl_vars['wishlistIDS']->value)) {?>
                                  Scoate de la favorite
                              <?php } else { ?>
                                  Adauga la favorite
                              <?php }?>
                          </span>
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

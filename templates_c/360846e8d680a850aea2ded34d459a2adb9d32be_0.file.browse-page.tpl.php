<?php
/* Smarty version 3.1.39, created on 2023-02-20 06:39:23
  from 'C:\xampp\htdocs\proiect\templates\browse-page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63f3078b618663_58103986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '360846e8d680a850aea2ded34d459a2adb9d32be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proiect\\templates\\browse-page.tpl',
      1 => 1676871560,
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
function content_63f3078b618663_58103986 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="cars-front">
<div class="container">
<div class="row mt-5">
    <div class="col-lg-12">
        <h2 class="sugestions-browse">Sugestii pentru tine:</h2>
    </div>
</div>

<!-- CARDS  -->
<div class="row cards-section my-2">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sCars']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>
        <div class="col-lg-12 card-primary">
        <a href="car-page.php?car_id=<?php echo $_smarty_tpl->tpl_vars['car']->value['id'];?>
"><span class="clickable"></span></a>
            <div class="module module-image mb-3">
                <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['APP_WEB_ROOT']->value;?>
/images/masina<?php echo $_smarty_tpl->tpl_vars['car']->value['brand'];?>
.jpg" alt="#">
            </div>
            <div class="module module-text mt-3">

                <h3><?php echo $_smarty_tpl->tpl_vars['car']->value['brand'];?>
 <?php echo $_smarty_tpl->tpl_vars['car']->value['model'];?>
</h3>
                <div class="module module-text"></div>
                <p>2018</p>
                <p>142 093km</p>
                <p>Diesel</p>
                <p>1968cm3</p>
                <h4><?php echo $_smarty_tpl->tpl_vars['car']->value['price'];?>
</h4>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>


    <form  action="browse-page.php" method="POST">
    <label for="brand_id">Marca:</label>
    <select name="brand_id" class="form-control select-brand" id="selBrand" onchange="this.form.submit()"> 
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
    <label for="model_id">Modelul:</label>
    <select name="model_id" class="form-control" id='select-model' onchange="this.form.submit()"> 
        <option value="0" selected="selected">Toate</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modelsLimited']->value, 'model');
$_smarty_tpl->tpl_vars['model']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['model']->value) {
$_smarty_tpl->tpl_vars['model']->do_else = false;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['model']->value['id'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['model_id']->value)) && $_smarty_tpl->tpl_vars['model_id']->value == $_smarty_tpl->tpl_vars['model']->value['id']) {?> selected='selected' <?php }?>><?php echo $_smarty_tpl->tpl_vars['model']->value['name'];?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </select>
    <label for="sort-cars">Sortare:</label>
    <input type="checkbox" id="sort-cars" name="sort-cars" value="ascending" <?php if ((isset($_smarty_tpl->tpl_vars['sort']->value))) {?> checked <?php }?> onchange="this.form.submit()"> 
    <button type="submit" class="btn btn-secondary" name="filter" style="visibility: hidden;">Filtreaza</button>
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
/images/masina<?php echo $_smarty_tpl->tpl_vars['car']->value['brand_id'];?>
.jpg" />
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
                          <i class="fa <?php if ($_smarty_tpl->tpl_vars['car']->value['wishlist'] == $_smarty_tpl->tpl_vars['car']->value['id']) {?>fa-heart<?php } else { ?>fa-heart-o<?php }?>"></i>
                          <span>
                              <?php if ($_smarty_tpl->tpl_vars['car']->value['wishlist'] == $_smarty_tpl->tpl_vars['car']->value['id']) {?>
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

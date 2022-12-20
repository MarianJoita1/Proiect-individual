<?php
/* Smarty version 3.1.39, created on 2022-12-10 11:10:56
  from 'C:\xampp\htdocs\proiect\templates\add-edit-car.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63945b30ae75e5_41032810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a13033176a3c4e872608a3007091d134f7db7835' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proiect\\templates\\add-edit-car.tpl',
      1 => 1661325542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63945b30ae75e5_41032810 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal adauga masina -->
<!-- $car->editCar($carID, $status, $brand_id, $model_id, $horse_power, $cc, $dors, $color, $number, $price); -->
  <form id="addEditCar" class="modal fade" role="dialog" action="add-edit-car.php" method="POST">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
          <h4 class="modal-title">Adauga masina</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" class="form-control"> 
              <option value="2" selected="selected">Alege</option>
              <option value="1">Activ</option>
              <option value="0">Inactiv</option>
            </select>
          </div>
          <div class="form-group">
            <label for="brand_id">Marca:</label>
            <select name="brand_id" class="form-control"> 
              <option value="0" selected="selected">Alege</option>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['brand']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['brand']->value['name'];?>
</option>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
          </div>
          <div class="form-group">
            <label for="model_id">Model:</label>
            <select name="model_id" class="form-control"> 
              <option value="0" selected="selected">Alege</option>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['models']->value, 'model');
$_smarty_tpl->tpl_vars['model']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['model']->value) {
$_smarty_tpl->tpl_vars['model']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['model']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['model']->value['name'];?>
</option>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
          </div>
          <div class="form-group">
            <label for="hp">Cai Putere:</label>
            <input type="text" class="form-control" id="hp" name="hp">
          </div>
          <div class="form-group">
            <label for="cc">Capacitate cilindrica:</label>
            <input type="text" class="form-control" id="cc" name="cc">
          </div>
          <div class="form-group">
            <label for="dors">Numar usi:</label>
            <input type="text" class="form-control" id="dors" name="dors">
          </div>
          <div class="form-group">
            <label for="color">Culoare:</label>
            <input type="text" class="form-control" id="color" name="color">
          </div>
          <div class="form-group">
            <label for="number">Numar:</label>
            <input type="text" class="form-control" id="number" name="number">
          </div>
          <div class="form-group">
            <label for="price">Pret:</label>
            <input type="text" class="form-control" id="price" name="price">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-secondary" name="add">Salveaza</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Inchide</button>
        </div>
      </div>
    </div>
  </form> <?php }
}

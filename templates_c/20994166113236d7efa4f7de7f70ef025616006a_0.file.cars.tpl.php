<?php
/* Smarty version 3.1.39, created on 2022-08-26 17:27:03
  from 'C:\xampp\htdocs\proiect-practica\templates\cars.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6308e647011358_22038068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20994166113236d7efa4f7de7f70ef025616006a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proiect-practica\\templates\\cars.tpl',
      1 => 1661325542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:add-edit-car.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6308e647011358_22038068 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:add-edit-car.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="cars">
    <p>
      <a href="index.php" class="btn btn-secondary">Prima pagina</a>
      <button type="button" class="btn btn-secondary" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#addEditCar">Adauga masina</button>
    </p>

    <table class="table">
      <thead>
        <tr>
          <th class="id">Id</th>
          <th class="status">Status</th>
          <th class="brand">Marca</th>
          <th class="model">Model</th>
          <th class="hp">HP</th>
          <th class="cc">CC</th>
          <th class="dors">Usi</th>
          <th class="color">Culoare</th>
          <th class="number">Numar</th>
          <th class="price">Price</th>
          <th class="date">Data adaugarii</th>
          <th class="actions">&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cars']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>
        <tr>
          <td class="id"><?php echo $_smarty_tpl->tpl_vars['car']->value['id'];?>
</td>
          <td class="status"><?php if ($_smarty_tpl->tpl_vars['car']->value['status']) {?>Activ<?php } else { ?>Inactiv<?php }?></td>
          <td class="brand"><?php echo $_smarty_tpl->tpl_vars['car']->value['brand'];?>
</td>
          <td class="model"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['car']->value['model'])===null||$tmp==='' ? "unknown" : $tmp);?>
</td>
          <td class="hp"><?php echo $_smarty_tpl->tpl_vars['car']->value['hp'];?>
</td>
          <td class="cc"><?php echo $_smarty_tpl->tpl_vars['car']->value['cc'];?>
</td>
          <td class="dors"><?php echo $_smarty_tpl->tpl_vars['car']->value['dors'];?>
</td>
          <td class="color"><?php echo $_smarty_tpl->tpl_vars['car']->value['color'];?>
</td>
          <td class="number"><?php echo $_smarty_tpl->tpl_vars['car']->value['number'];?>
</td>
          <td class="price"><?php echo $_smarty_tpl->tpl_vars['car']->value['price'];?>
</td>
          <td class="date"><?php echo $_smarty_tpl->tpl_vars['car']->value['date_added'];?>
</td>
          <td class="actions">
            <a href="<?php echo APP_WEB_ROOT;?>
/add-edit-car.php?id=<?php echo $_smarty_tpl->tpl_vars['car']->value['id'];?>
" class="edit"><i class="fa fa-pencil"></i></a>
            <a href="<?php echo APP_WEB_ROOT;?>
/delete-car.php?id=<?php echo $_smarty_tpl->tpl_vars['car']->value['id'];?>
"><i class="fa fa-trash-o"></i></a>
          </td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

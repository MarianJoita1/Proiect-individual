<?php
/* Smarty version 3.1.39, created on 2022-08-21 09:32:17
  from '/home/robertbr/justin.robertb.ro/templates/users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6301d1717aab10_74039593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49e867a22008d5f3b81d96c4b8cefd2807094771' => 
    array (
      0 => '/home/robertbr/justin.robertb.ro/templates/users.tpl',
      1 => 1661063535,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:add-edit-user.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6301d1717aab10_74039593 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:add-edit-user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="users">
    <p>
    <a href="main-page.php" class="btn btn-secondary fa fa-arrow-left"></a>
      <button type="button" class="btn btn-secondary" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#addEditUser">Adauga utilizator</button>
    </p>

    <table class="table">
      <thead>
        <tr>
          <th class="id">Id</th>
          <th class="type">Tip</th>
          <th class="status">Status</th>
          <th class="email">Email</th>
          <th class="date">Data adaugarii</th>
          <th class="actions">&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user', false, NULL, 'i', array (
));
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
        <tr>
          <td class="id"><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
          <td class="type"><?php if ($_smarty_tpl->tpl_vars['user']->value['type'] == '0') {?>Admin<?php } else { ?>Client<?php }?></td>
          <td class="status"><?php if ($_smarty_tpl->tpl_vars['user']->value['status']) {?>Activ<?php } else { ?>Inactiv<?php }?></td>
          <td class="email"><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
          <td class="date"><?php echo $_smarty_tpl->tpl_vars['user']->value['date_added'];?>
</td>
          <td class="actions">
            <a href="<?php echo APP_WEB_ROOT;?>
/add-edit-user.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" class="edit"><i class="fa fa-pencil"></i></a>
            <a href="<?php echo APP_WEB_ROOT;?>
/delete-user.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
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

<?php
/* Smarty version 3.1.39, created on 2022-08-26 17:12:48
  from 'C:\xampp\htdocs\proiect-practica\templates\pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6308e2f0e233a2_52387443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f36d2632c960e80006fabf64fcc330188f7f18cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proiect-practica\\templates\\pagination.tpl',
      1 => 1661325542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6308e2f0e233a2_52387443 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['totalPages']->value))) {?>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <?php if ((isset($_smarty_tpl->tpl_vars['prevPage']->value))) {?>
    <li class="page-item">
      <a class="page-link" href="browse-page.php?page=<?php echo $_smarty_tpl->tpl_vars['prevPage']->value;?>
" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php }?>

    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['totalPages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_0_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <li class="page-item <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null) == $_smarty_tpl->tpl_vars['page']->value) {?>active<?php }?>"><a class="page-link" href="browse-page.php?page=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null);?>
</a></li>
    <?php
}
}
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['nextPage']->value))) {?>
    <li class="page-item">
      <a class="page-link" href="browse-page.php?page=<?php echo $_smarty_tpl->tpl_vars['nextPage']->value;?>
" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
    <?php }?>

  </ul>
</nav>
<?php }
}
}

<?php
/* Smarty version 3.1.39, created on 2022-08-12 14:07:42
  from '/home/robertbr/justin.robertb.ro/templates/login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62f6347e4d1ac9_75169329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c310d91a82a8ae7aab7a5b423fe7cad3381a99c9' => 
    array (
      0 => '/home/robertbr/justin.robertb.ro/templates/login-form.tpl',
      1 => 1660302449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62f6347e4d1ac9_75169329 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="login.php" method="get">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form2Example1" class="form-control" />
    <label class="form-label" for="form2Example1">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

  </div>

  <!-- Submit button -->
  <div>
  <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="register.php">Register</a></p>
  </div>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

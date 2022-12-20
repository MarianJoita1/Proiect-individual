<?php
/* Smarty version 3.1.39, created on 2022-12-05 08:54:17
  from 'C:\xampp\htdocs\proiect\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_638da3a90d0894_83373389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81d829ab534933411a5ec165c79786ffba23b3d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proiect\\templates\\login.tpl',
      1 => 1661325542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_638da3a90d0894_83373389 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Conectare</p>
                <form action="login.php" method="POST">
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example1" class="form-control" name="email" value="" />
                    <label class="form-label" for="form2Example1">Adresa email</label>
                  </div>

                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example2" class="form-control" name="password" value="" />
                    <label class="form-label" for="form2Example2">parola</label>
                  </div>

                  <!-- 2 column grid layout for inline styling -->
                  <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                      <!-- Checkbox -->
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label" for="form2Example31"> Tine-ma conectat! </label>
                      </div>
                    </div>

                  </div>

                  <!-- Submit button -->
                  <div>
                  <button type="submit" class="btn btn-primary" name="login">Conectare</button>
                  </div>
                  <!-- Register buttons -->
                  <div class="text-center">
                    <p>Nu esti un membru? <a href="register.php">Inregistreaza-te!</a></p>
                  </div>
                </form>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

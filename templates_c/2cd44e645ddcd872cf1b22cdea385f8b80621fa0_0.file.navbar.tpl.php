<?php
/* Smarty version 3.1.39, created on 2022-08-21 12:43:58
  from '/home/robertbr/justin.robertb.ro/templates/navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6301fe5ee7a311_03562852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cd44e645ddcd872cf1b22cdea385f8b80621fa0' => 
    array (
      0 => '/home/robertbr/justin.robertb.ro/templates/navbar.tpl',
      1 => 1661074983,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6301fe5ee7a311_03562852 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
    <div class="row">   
    <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php" style="color: rgba(0,0,0,.55); font-size: larger;">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse top-0" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="browse-page.php" style="color: rgba(0,0,0,.55); font-size: larger;">Cauta Masini</a>
        </li>
        <?php if ((isset($_smarty_tpl->tpl_vars['isLogged']->value))) {?>
            <li class="nav-item dropdown">
                <a class="nav-link fa fa-user fa-lg" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="cars.php">Masinile mele</a></li>
                <li><a class="dropdown-item" href="favorites.php">Favorite</a></li>
                <li><a class="dropdown-item" href="main-page.php">administrare</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="logout.php">Deconectare</a></li>
                </ul>
            </li>
        <?php } else { ?>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="padding-top: 5px;">
            <li class="nav-item">
                <a class="nav-link fa fa-arrow-right fa-lg" href="login.php" role="button"> Login</a>
                
            </li>
            <li class="nav-item">
                <a class="nav-link register-link fa fa-pencil fa-lg" href="register.php" role="button"> Inregistrare</a>
            </li>
            </ul>
        <?php }?>
        </ul>
    </div>
    </div>
    </nav>
    </div>
</body>
    

<?php }
}

<?php
/* Smarty version 3.1.39, created on 2023-02-20 06:19:07
  from 'C:\xampp\htdocs\proiect\templates\car.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63f302cbb66d24_67583682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a91a00ed11597e6f69c0bf198bc9a8fddd433a4b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proiect\\templates\\car.tpl',
      1 => 1676870319,
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
function content_63f302cbb66d24_67583682 (Smarty_Internal_Template $_smarty_tpl) {
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
          <img src="<?php echo $_smarty_tpl->tpl_vars['APP_WEB_ROOT']->value;?>
/images/masina<?php echo $_smarty_tpl->tpl_vars['car']->value['brand_id'];?>
.jpg" class="d-block w-100" alt="first">
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
      <button id="mesagerie" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success contact"><i class="fa fa-phone-o">Trimite mesaj</i></button>



      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="chat-modal-label">Chat</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="chat-body">
              <div class="row">
                <!-- User list on the left -->
                <div class="col-4">
                  <div class="profiles">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['conversations']->value, 'conv');
$_smarty_tpl->tpl_vars['conv']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conv']->value) {
$_smarty_tpl->tpl_vars['conv']->do_else = false;
?>
                    <article class="leaderboard__profile" href="">
                      <img src="<?php echo $_smarty_tpl->tpl_vars['APP_WEB_ROOT']->value;?>
/images/profile.jpg" alt="Mark Zuckerberg" class="leaderboard__picture">
                      <span class="leaderboard__name"><?php echo $_smarty_tpl->tpl_vars['conv']->value['email'];?>
</span>
                      <span hidden class="conv-id" id="conv-id"><?php echo $_smarty_tpl->tpl_vars['conv']->value['id'];?>
</span>
                    </article>

                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  
                  </div>
                </div>
                <!-- Chat window on the right -->
                <div class="col-8">
                  <div class="chat-window" id="chat-window">
                    <!-- Chat messages will be added here -->
                    <div class= "messages-content" id = "messages-content">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['message']->value['sender'] == $_smarty_tpl->tpl_vars['logged_user']->value && $_smarty_tpl->tpl_vars['message']->value['receiver'] == 2) {?>
                          <p class="message message-personal"><?php echo $_smarty_tpl->tpl_vars['message']->value['text'];?>
</p>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['message']->value['sender'] == 2 && $_smarty_tpl->tpl_vars['message']->value['receiver'] == $_smarty_tpl->tpl_vars['logged_user']->value) {?>
                          <p class="message "><?php echo $_smarty_tpl->tpl_vars['message']->value['text'];?>
</p>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    
                  </div>

                  <form class="messageForm" method="post">
                    <input type="text" id = "messageInput" name= "messageInput" class= "input-text" placeholder="type..."/> 
                    <button type="button" href="" id="send" class= "send-button" name="send"> Send </button>
                  <form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>




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

<div class="row mt-5">
    <div class="col-lg-12">
        <h2 class="sugestions-browse">Anunturi similare:</h2>
    </div>
</div>

<!-- CARDS  -->

<div class="row cards-section my-2">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cars']->value, 'theCar');
$_smarty_tpl->tpl_vars['theCar']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theCar']->value) {
$_smarty_tpl->tpl_vars['theCar']->do_else = false;
?>
      <?php if ($_smarty_tpl->tpl_vars['theCar']->value['id'] != $_smarty_tpl->tpl_vars['car']->value['id']) {?>
    <div class="col-lg-12 card-primary">
        <div class="module module-image mb-3">
            <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['APP_WEB_ROOT']->value;?>
/images/Masina<?php echo $_smarty_tpl->tpl_vars['theCar']->value['brand'];?>
.jpg" alt="#">
        </div>
            <div class="module module-text mt-3">
            <a href="car-page.php?car_id=<?php echo $_smarty_tpl->tpl_vars['theCar']->value['id'];?>
"><span class="clickable"></span></a>
                <h3><?php echo $_smarty_tpl->tpl_vars['theCar']->value['brand'];?>
 <?php echo $_smarty_tpl->tpl_vars['theCar']->value['model'];?>
</h3>
                <div class="module module-text"></div>
                <p><?php echo $_smarty_tpl->tpl_vars['theCar']->value['color'];?>
</p>
                <p>142 093km</p>
                <p>Diesel</p>
                <h4><?php echo $_smarty_tpl->tpl_vars['theCar']->value['price'];?>
 EUR</h4>
            </div>
    </div>
      <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

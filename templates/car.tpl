
{include file="header.tpl"}

{include file="navbar.tpl"}
<div class="row">
  <div class="col-2"></div>
  <div class="col-8">
  <div class="car-carousel">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{$APP_WEB_ROOT}/images/masina{$car.brand_id}.jpg" class="d-block w-100" alt="first">
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
      <div class="car-info-row">{$car.brand} {$car.model}</div>
      <div class="card-price car-info-row">{$car.price} EUR</div>
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
                  {foreach $conversations as $conv}
                    <article class="leaderboard__profile" href="">
                      <img src="{$APP_WEB_ROOT}/images/profile.jpg" alt="Mark Zuckerberg" class="leaderboard__picture">
                      <span class="leaderboard__name">{$conv.email}</span>
                      <span hidden class="conv-id" id="conv-id">{$conv.id}</span>
                    </article>

                  {/foreach}
                  
                  </div>
                </div>
                <!-- Chat window on the right -->
                <div class="col-8">
                  <div class="chat-window" id="chat-window">
                    <!-- Chat messages will be added here -->
                    <div class= "messages-content" id = "messages-content">
                    {foreach $messages as $message}
                        {if $message.sender == $logged_user and $message.receiver == 2}
                          <p class="message message-personal">{$message.text}</p>
                        {/if}
                        {if $message.sender == 2 and $message.receiver == $logged_user}
                          <p class="message ">{$message.text}</p>
                        {/if}
                    {/foreach}
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

    {if $car.hp}<p>Cai putere      <span class="text-info">{$car.hp}</span></p>{/if}
    {if $car.cc}<p>Capacitate      <span class="text-info">{$car.cc}</span></p>{/if}
    {if $car.dors}<p>numar usi     <span class="text-info">{$car.dors}</span></p>{/if}
    {if $car.color}<p>culoare      <span class="text-info">{$car.color}</span></p>{/if}
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
    {foreach $cars as $theCar}
      {if $theCar.id != $car.id}
    <div class="col-lg-12 card-primary">
        <div class="module module-image mb-3">
            <img class="img-fluid" src="{$APP_WEB_ROOT}/images/Masina{$theCar.brand}.jpg" alt="#">
        </div>
            <div class="module module-text mt-3">
            <a href="car-page.php?car_id={$theCar.id}"><span class="clickable"></span></a>
                <h3>{$theCar.brand} {$theCar.model}</h3>
                <div class="module module-text"></div>
                <p>{$theCar.color}</p>
                <p>142 093km</p>
                <p>Diesel</p>
                <h4>{$theCar.price} EUR</h4>
            </div>
    </div>
      {/if}
    {/foreach}
{*
    <div class="col-lg-12 card-primary">
        <div class="module module-image mb-3">
            <img class="img-fluid" src="/proiect/images/image2.jpg" alt="#">
        </div>
            <div class="module module-text mt-3">
                <h3>Mercedes-Benz S 350 (BlueTEC) D L 7G-T</h3>
                <div class="module module-text"></div>
                <p>2017</p>
                <p>160 093km</p>
                <p>Diesel</p>
                <p>Sedan</p>
                <h4>41 000</h4>
            </div>
    </div>
        <div class="col-lg-12 card-primary">
            <div class="module module-image mb-3">
                <img class="img-fluid" src="/proiect/images/image3.jpg" alt="#">
            </div>
                <div class="module module-text mt-3">
                        <h3>Audi A8 60 TFSI Quattro Tiptronic</h3>
                        <div class="module module-text"></div>
                            <p>2021</p>
                            <p>51 062km</p>
                            <p>Benzina</p>
                            <p>1986cm3</p>
                            <h4>50 999</h4>
                </div>
        </div>
        <div class="col-lg-12 card-primary">
            <div class="module module-image mb-3">
                <img class="img-fluid" src="/proiect/images/image4.jpg" alt="#">
            </div>
            <div class="module module-text mt-3">
                <h3>Skoda Superb 1.5 TSI DSG Ambition</h3>
                <div class="module module-text"></div>
                    <p>2019</p>
                    <p>108 093km</p>
                    <p>Benzina</p>
                    <p>Sedan</p>
                    <h4>22 002</h4>
            </div>
        </div>
*}
    </div>
</div>

{include file="footer.tpl"}
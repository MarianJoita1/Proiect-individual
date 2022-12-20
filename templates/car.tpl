
{include file="header.tpl"}

{include file="navbar.tpl"}
<div class="row">
  <div class="col-2"></div>
  <div class="col-8">
  <div class="car-carousel">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/carSale.png" class="d-block w-100" alt="first">
        </div>
        <div class="carousel-item">
          <img src="images/rover.png" class="d-block w-100" alt="second">
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
      <button type="button" class="btn btn-success contact"><i class="fa fa-phone-o">Contact</i></button>
      <p class="address">{if $user.email} {$user.email} {else} nu s-a gasit un email {/if}</p>
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



{include file="footer.tpl"}
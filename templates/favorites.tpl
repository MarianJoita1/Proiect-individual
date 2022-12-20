{include file="header.tpl"}

{include file="navbar.tpl"}

<div class="favorites">
    {foreach $cars as $car}
      <div class="row car">
        <a href="car-page.php?car_id={$car.id}"><span class="clickable"></span></a>
        <div class="col-3">
        <img class="image" src="images/rover.png" />
        </div>
        <div class="col-6">
            <p class="card-title">{$car.brand} {$car.model}</p>
            <p class="card-info">
                &#x2022; cai putere:{$car.hp}<br>
                &#x2022; numar de usi: {$car.dors}<br>
                {if $car.color}&#x2022; culoare: {$car.color}{/if}
            </p>
        </div>
        <div class="col-3 text-end">
                  <p class="card-price">{$car.price} EUR</p>
                  <div class="text-end card-fav">
                      <a class="remove-item " href="{$APP_WEB_ROOT}/favorites.php?remove=1&car_id={$car.id}">
                        <i class="fa fa-heart"></i>
                        Scoate de la favorite
                      </a>
                  </div>
            </div>
        </div>
    {/foreach}
    {include file="pagination.tpl"}
</div>
{include file="footer.tpl"}
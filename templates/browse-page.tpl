{include file="header.tpl"}

{include file="navbar.tpl"}


<div class="cars-front">
    <form  action="browse-page.php" method="POST">
    <label for="brand_id">Marca:</label>
    <select name="brand_id" class="form-control select-brand" id="selBrand" onchange="this.form.submit()"> 
        <option value="0" selected="selected">Toate</option>
    {foreach $brands as $brand}
    <option value="{$brand.id}" {if isset($brand_id) && $brand_id eq $brand.id} selected='selected' {/if}>{$brand.name}</option>
    {/foreach}

    </select>
    <select name="model_id" class="form-control" id='select-model' onchange="this.form.submit()"> 
        <option value="0" selected="selected">Toate</option>
    {foreach $modelsLimited as $model}
    <option value="{$model.id}" {if isset($model_id) && $model_id eq $model.id} selected='selected' {/if}>{$model.name}</option>
    {/foreach}

    </select>
    <input type="checkbox" id="sort-cars" name="sort-cars" value="ascending" {if isset($sort)} checked {/if} onchange="this.form.submit()"> 
    <button type="submit" class="btn btn-secondary" name="filter" onclick="">Filtreaza</button>
    </form>
    {foreach $cars as $car}
        <div class="row car">
              <a href="car-page.php?car_id={$car.id}"><span class="clickable"></span></a>
              <div class="col-3">
                <img class="image" src="{$APP_WEB_ROOT}/images/rover.png" />
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
                      <a class="add-to-wishlist " href="{$APP_WEB_ROOT}/favorites.php?car_id={$car.id}">
                          <i class="fa {if isset($wishlistIDS) && in_array($car.id, $wishlistIDS)}fa-heart{else}fa-heart-o{/if}"></i>
                          <span>
                              {if isset($wishlistIDS) && in_array($car.id, $wishlistIDS)}
                                  Scoate de la favorite
                              {else}
                                  Adauga la favorite
                              {/if}
                          </span>
                      </a>
                  </div>
              </div>
          </div>

    {*










          <div>
            <h1>{$car.brand}, {$car.model}</h1>
            <p style="color: gray;">&#x2022; cai putere:{$car.hp} <br> &#x2022; numar de usi: {$car.dors} <br> &#x2022; culoare: {$car.color}</p>
          </div>
          <div class="text-end">
            <h1 style="color:red;">{$car.price} EUR</h1>
            <div class="text-end" style="margin-top: 10%;">
            <h2 class="align-self-end tm-2" style="color: blue;"><i class="fa fa-heart"></i>Adauga la favorite</h2>
            </div>
          </div>
    *}
    {/foreach}

    {include file="pagination.tpl"}
</div>
{include file="footer.tpl"}
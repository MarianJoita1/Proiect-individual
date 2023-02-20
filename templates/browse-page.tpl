{include file="header.tpl"}

{include file="navbar.tpl"}


<div class="cars-front">
<div class="container">
<div class="row mt-5">
    <div class="col-lg-12">
        <h2 class="sugestions-browse">Sugestii pentru tine:</h2>
    </div>
</div>

<!-- CARDS  -->
<div class="row cards-section my-2">
    {foreach $sCars as $car}
        <div class="col-lg-12 card-primary">
        <a href="car-page.php?car_id={$car.id}"><span class="clickable"></span></a>
            <div class="module module-image mb-3">
                <img class="img-fluid" src="{$APP_WEB_ROOT}/images/masina{$car.brand}.jpg" alt="#">
            </div>
            <div class="module module-text mt-3">

                <h3>{$car.brand} {$car.model}</h3>
                <div class="module module-text"></div>
                <p>2018</p>
                <p>142 093km</p>
                <p>Diesel</p>
                <p>1968cm3</p>
                <h4>{$car.price}</h4>
            </div>
        </div>
    {/foreach}

{*
    <div class="col-lg-12 card-primary">
        <div class="module module-image mb-3">
            <img class="img-fluid" src="{$APP_WEB_ROOT}/images/audiA4.jpg" alt="#">
        </div>
        <div class="module module-text mt-3">
            <h3>Audi A4</h3>
            <div class="module module-text"></div>
            <p>2018</p>
            <p>142 093km</p>
            <p>Diesel</p>
            <p>1968cm3</p>
            <h4>27 999 EUR</h4>
        </div>
    </div>

    <div class="col-lg-12 card-primary">
        <div class="module module-image mb-3">
            <img class="img-fluid" src="{$APP_WEB_ROOT}/images/image2.jpg" alt="#">
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
            <img class="img-fluid" src="{$APP_WEB_ROOT}/images/image3.jpg" alt="#">
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
            <img class="img-fluid" src="{$APP_WEB_ROOT}/images/image4.jpg" alt="#">
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
</div>
*}
</div>


    <form  action="browse-page.php" method="POST">
    <label for="brand_id">Marca:</label>
    <select name="brand_id" class="form-control select-brand" id="selBrand" onchange="this.form.submit()"> 
        <option value="0" selected="selected">Toate</option>
    {foreach $brands as $brand}
    <option value="{$brand.id}" {if isset($brand_id) && $brand_id eq $brand.id} selected='selected' {/if}>{$brand.name}</option>
    {/foreach}

    </select>
    <label for="model_id">Modelul:</label>
    <select name="model_id" class="form-control" id='select-model' onchange="this.form.submit()"> 
        <option value="0" selected="selected">Toate</option>
    {foreach $modelsLimited as $model}
    <option value="{$model.id}" {if isset($model_id) && $model_id eq $model.id} selected='selected' {/if}>{$model.name}</option>
    {/foreach}

    </select>
    <label for="sort-cars">Sortare:</label>
    <input type="checkbox" id="sort-cars" name="sort-cars" value="ascending" {if isset($sort)} checked {/if} onchange="this.form.submit()"> 
    <button type="submit" class="btn btn-secondary" name="filter" style="visibility: hidden;">Filtreaza</button>
    </form>
    {foreach $cars as $car}
        <div class="row car">
              <a href="car-page.php?car_id={$car.id}"><span class="clickable"></span></a>
              <div class="col-3">
                <img class="image" src="{$APP_WEB_ROOT}/images/masina{$car.brand_id}.jpg" />
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
                          <i class="fa {if $car.wishlist eq $car.id}fa-heart{else}fa-heart-o{/if}"></i>
                          <span>
                              {if $car.wishlist eq $car.id}
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
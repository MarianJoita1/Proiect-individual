{include file="header.tpl"}
{include file="navbar.tpl"}
{include file="add-edit-car.tpl"}
  <div class="cars">
    <p>
      <a href="index.php" class="btn btn-secondary">Prima pagina</a>
      <button type="button" class="btn btn-secondary" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#addEditCar">Adauga masina</button>
    </p>

    <table class="table">
      <thead>
        <tr>
          <th class="id">Id</th>
          <th class="status">Status</th>
          <th class="brand">Marca</th>
          <th class="model">Model</th>
          <th class="hp">HP</th>
          <th class="cc">CC</th>
          <th class="dors">Usi</th>
          <th class="color">Culoare</th>
          <th class="number">Numar</th>
          <th class="price">Price</th>
          <th class="date">Data adaugarii</th>
          <th class="actions">&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        {foreach $cars as $car}
        <tr>
          <td class="id">{$car.id}</td>
          <td class="status">{if $car.status}Activ{else}Inactiv{/if}</td>
          <td class="brand">{$car.brand}</td>
          <td class="model">{$car.model|default:"unknown"}</td>
          <td class="hp">{$car.hp}</td>
          <td class="cc">{$car.cc}</td>
          <td class="dors">{$car.dors}</td>
          <td class="color">{$car.color}</td>
          <td class="number">{$car.number}</td>
          <td class="price">{$car.price}</td>
          <td class="date">{$car.date_added}</td>
          <td class="actions">
            <a href="{APP_WEB_ROOT}/add-edit-car.php?id={$car.id}" class="edit"><i class="fa fa-pencil"></i></a>
            <a href="{APP_WEB_ROOT}/delete-car.php?id={$car.id}"><i class="fa fa-trash-o"></i></a>
          </td>
        </tr>
        {/foreach}
      </tbody>
    </table>
  </div>
{include file="footer.tpl"}

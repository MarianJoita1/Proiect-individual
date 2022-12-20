{include file="header.tpl"}
{include file="add-product.tpl"}
{include file="edit-product.tpl"}

  <div class="products">
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#addProduct">Adauga produs</button>
    <div class="row search">
      <div class="col-xs-10 col-md-3"><input type="text" class="form-control" name="keyword" value="" placeholder="Cauta..." /></div>
      <div class="col-xs-2">
        <button type="button" class="btn btn-primary">
          <i class="fa fa-search"></i>
        </button>
      </div>
    </div>

    <table class="table">
      <thead>
        <tr>
          <th class="id">Id</th>
          <th class="status">Status</th>
          <th class="category">Categorie</th>
          <th class="price">Pret</th>
          <th class="name">Nume</th>
          <th class="stock">Stoc</th>
          <th class="description">Descriere</th>
          <th class="actions">&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        {foreach $products as $product}
        <tr data-categoryid="<?php echo $product['category_id']; ?>">
          <td class="id">{$product.id}</td>
          <td class="status">{$product.status}</td>
          <td class="category">{$product.category}</td>
          <td class="price">{$product.price}</td>
          <td class="name">{$product.name}</td>
          <td class="stock">{$product.stock}</td>
          <td class="description">{$product.description}</td>
          <td class="actions">
            <a href="{APP_WEB_ROOT}/edit-product.php?id={$product.id}" class="editProduct"><i class="fa fa-pencil"></i></a>
            <a href="{APP_WEB_ROOT}/delete-product.php?id={$product.id}"><i class="fa fa-trash-o"></i></a>
          </td>
        </tr>
        {/foreach}
      </tbody>
    </table>
  </div>
{include file="footer.tpl"}

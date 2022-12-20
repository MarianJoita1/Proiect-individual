<!-- Modal adauga produs-->
  <form id="addProduct" class="modal fade" role="dialog" action="add-product.php" method="POST">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Adauga produs</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" class="form-control"> 
              <option value="0">Alege</option>
              <option value="1">Activ</option>
              <option value="2">Inactiv</option>
            </select>
          </div>
          <div class="form-group">
            <label for="category_id">Categorie:</label>
            <select name="category_id" class="form-control"> 
              <option value="0">Alege</option>
              {foreach $categories as $category}
                <option value="{$category.id}">{$category.name}</option>
              {/foreach}
            </select>
          </div>
          <div class="form-group">
            <label for="name">Nume:</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="form-group">
            <label for="description">Descriere:</label>
            <textarea class="form-control" rows="5" id="description" name="description"></textarea>
          </div>
          <div class="form-group">
            <label for="price">Pret:</label>
            <input type="text" class="form-control" id="price" name="price">
          </div>
          <div class="form-group">
            <label for="stock">Stoc:</label>
            <input type="text" class="form-control" id="stock" name="stock">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" name="add">Salveaza</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Inchide</button>
        </div>
      </div>
    </div>
  </form> 
<!-- Modal adauga masina -->
<!-- $car->editCar($carID, $status, $brand_id, $model_id, $horse_power, $cc, $dors, $color, $number, $price); -->
  <form id="addEditCar" class="modal fade" role="dialog" action="add-edit-car.php" method="POST">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
          <h4 class="modal-title">Adauga masina</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" class="form-control"> 
              <option value="2" selected="selected">Alege</option>
              <option value="1">Activ</option>
              <option value="0">Inactiv</option>
            </select>
          </div>
          <div class="form-group">
            <label for="brand_id">Marca:</label>
            <select name="brand_id" class="form-control"> 
              <option value="0" selected="selected">Alege</option>
              {foreach $brands as $brand}
                <option value="{$brand.id}">{$brand.name}</option>
              {/foreach}
            </select>
          </div>
          <div class="form-group">
            <label for="model_id">Model:</label>
            <select name="model_id" class="form-control"> 
              <option value="0" selected="selected">Alege</option>
              {foreach $models as $model}
                <option value="{$model.id}">{$model.name}</option>
              {/foreach}
            </select>
          </div>
          <div class="form-group">
            <label for="hp">Cai Putere:</label>
            <input type="text" class="form-control" id="hp" name="hp">
          </div>
          <div class="form-group">
            <label for="cc">Capacitate cilindrica:</label>
            <input type="text" class="form-control" id="cc" name="cc">
          </div>
          <div class="form-group">
            <label for="dors">Numar usi:</label>
            <input type="text" class="form-control" id="dors" name="dors">
          </div>
          <div class="form-group">
            <label for="color">Culoare:</label>
            <input type="text" class="form-control" id="color" name="color">
          </div>
          <div class="form-group">
            <label for="number">Numar:</label>
            <input type="text" class="form-control" id="number" name="number">
          </div>
          <div class="form-group">
            <label for="price">Pret:</label>
            <input type="text" class="form-control" id="price" name="price">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-secondary" name="add">Salveaza</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Inchide</button>
        </div>
      </div>
    </div>
  </form> 
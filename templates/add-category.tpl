<!-- Modal adauga categorie-->
  <form id="addCategory" class="modal fade" role="dialog" action="add-category.php" method="POST">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Adauga categorie</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="name">Nume:</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" name="add">Salveaza</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Inchide</button>
        </div>
      </div>
    </div>
  </form>
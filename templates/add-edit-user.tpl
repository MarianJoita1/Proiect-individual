<!-- Modal adauga utilizator -->
  <form id="addEditUser" class="modal fade" role="dialog" action="add-edit-user.php" method="POST">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
          <h4 class="modal-title">Adauga utilizator</h4>
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
            <label for="status">Tip:</label>
            <select name="type" class="form-control"> 
              <option value="2" selected="selected">Alege</option>
              <option value="1">Client</option>
              <option value="0">Admin</option>
            </select>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="password">Parola:</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-secondary" name="add">Salveaza</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Inchide</button>
        </div>
      </div>
    </div>
  </form> 
{include file="header.tpl"}
{include file="navbar.tpl"}
{include file="add-edit-user.tpl"}
  <div class="users">
    <p>
      <a href="index.php" class="btn btn-secondary">Prima pagina</a>
      <button type="button" class="btn btn-secondary" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#addEditUser">Adauga utilizator</button>
    </p>

    <table class="table">
      <thead>
        <tr>
          <th class="id">Id</th>
          <th class="type">Tip</th>
          <th class="status">Status</th>
          <th class="email">Email</th>
          <th class="date">Data adaugarii</th>
          <th class="actions">&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        {foreach $users as $user name="i"}
        <tr>
          <td class="id">{$user.id}</td>
          <td class="type">{if $user.type eq '0'}Admin{else}Client{/if}</td>
          <td class="status">{if $user.status}Activ{else}Inactiv{/if}</td>
          <td class="email">{$user.email}</td>
          <td class="date">{$user.date_added}</td>
          <td class="actions">
            <a href="{APP_WEB_ROOT}/add-edit-user.php?id={$user.id}" class="edit"><i class="fa fa-pencil"></i></a>
            <a href="{APP_WEB_ROOT}/delete-user.php?id={$user.id}"><i class="fa fa-trash-o"></i></a>
          </td>
        </tr>
        {/foreach}
      </tbody>
    </table>
  </div>
{include file="footer.tpl"}

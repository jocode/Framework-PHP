<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{$_layoutParams.root}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{$_layoutParams.root}acl/roles">Roles</a></li>
    <li class="breadcrumb-item active" aria-current="page">Editar Rol</li>
  </ol>
</nav>

<div class="row justify-content-center">
	<div class="col-4">
<h2>Editar Rol</h2>

<form name="form" method="post" action="{$_layoutParams.root}acl/editar_role/{$role.id_role}">
	<input type="hidden" name="guardar" value="1">
	<div class="form-group">
		<input class="form-control" type="text" name="rol" value="{$role.role}">
	</div>
	<input class="btn btn-success" type="submit" value="Guardar"/>
</form>
</div>
</div>
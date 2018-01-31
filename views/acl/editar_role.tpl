<h2>Agregar Rol</h2>

<form name="form" method="post" action="{$_layoutParams.root}acl/editar_role/{$role.id_role}">
	<input type="hidden" name="guardar" value="1">
	<p> Nombre del Rol <br/>
		<input type="text" name="rol" value="{$role.role}">
	</p>
	<br/>
	<input type="submit" value="Guardar"/>
</form>
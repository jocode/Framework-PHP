<h2>Permisos</h2>

<table class="table table-bordered">
	<thead class="table table-bordered">
		<tr class="text-center">
			<th>Id</th>
			<th>Permiso</th>
			<th>Key</th>
			<th colspan="2">Acciones</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$permisos item=permiso}
			<tr>
				<td>{$permiso.id}</td>
				<td>{$permiso.nombre}</td>
				<td>{$permiso.key}</td>
				<td>
					<a href="{$_layoutParams.root}acl/editar_permiso/{$permiso.id}">Editar</a>
				</td>
				<td>
					<a href="javascript:void(0);" onclick="eliminar('{$_layoutParams.root}acl/eliminar_permiso/{$permiso.id}');">Eliminar</a>
				</td>
			</tr>
		{/foreach}
	</tbody>
</table>

<a class="btn btn-success" href="{$_layoutParams.root}acl/agregar_permiso">Agregar</a>

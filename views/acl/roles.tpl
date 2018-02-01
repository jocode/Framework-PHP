<h2 class="text-center">Administración de Roles</h2>

{if isset($roles) && count($roles)}
<table class="table table-bordered">
 	<thead>
 		<tr class="text-center">
 			<th>ID</th>
 			<th>Role</th>
 			<th>Permisos</th>
 			<th colspan="2">Acciones</th>
 		</tr>
 	</thead>
 	<tbody>
 		{foreach from=$roles item=rol}
 			<tr>
 				<td>{$rol.id_role}</td>
 				<td>{$rol.role}</td>
 				<td>
 					<a href="{$_layoutParams.root}acl/permisos_role/{$rol.id_role}">Permisos</a>
 				</td>
 				<td>
 					<a href="{$_layoutParams.root}acl/editar_role/{$rol.id_role}">Editar</a>
 				</td>
 				<td>
					<a href="javascript:void(0);" onclick="eliminar('{$_layoutParams.root}acl/eliminar_role/{$rol.id_role}');">Eliminar</a>
				</td>
 			</tr>
 		{/foreach}
 	</tbody>
</table>
{/if}

<a class="btn btn-success" href="{$_layoutParams.root}acl/nuevo_role">Agregar Rol</a>

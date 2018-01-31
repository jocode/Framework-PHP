<h2>Administración de Roles</h2>

{if isset($roles) && count($roles)}
<table>
 	<thead>
 		<tr>
 			<th>ID</th>
 			<th>Role</th>
 			<th>Permisos</th>
 			<th>Editar</th>
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
 			</tr>
 		{/foreach}
 	</tbody>
</table>
{/if}

<p>
	<a href="{$_layoutParams.root}acl/nuevo_role">Agregar Rol</a>
</p>
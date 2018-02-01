<h2>Gestión de Usuarios</h2>

{if isset($usuarios) && count($usuarios)}
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Usuario</th>
				<th>Role</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$usuarios item=usuario}
				<tr>
					<td>{$usuario.id}</td>
					<td>{$usuario.usuario}</td>
					<td>{$usuario.role}</td>
					<td>
						<a href="{$_layoutParams.root}usuarios/permisos/{$usuario.id}">Permisos</a>
					</td>
				</tr>
			{/foreach}
		</tbody>
	</table>
{/if}
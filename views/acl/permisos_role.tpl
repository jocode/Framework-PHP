<h2>Administración de Permisos del Rol</h2>
<h3>Rol: {$rol.role}</h3>

<p>Permisos</p>

<form name="form" method="post">
	<input type="hidden" name="guardar" value="1">

	{if isset($permisos) && count($permisos)}
		<table>
			<thead>
				<tr>
					<th>Permiso</th>
					<th>Habilitado</th>
					<th>Denegado</th>
					<th>Ignorar</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$permisos item=permiso}
					<tr>
						<td>{$permiso.nombre}</td>
						<td>
							<input type="radio" name="perm_{$permiso.id}" value="1" {if ($permiso.valor == 1)}checked="checked"{/if}/>
						</td>
						<td>
							<input type="radio" name="perm_{$permiso.id}" value="" {if ($permiso.valor == '')}checked="checked"{/if}/>
						</td>
						<td>
							<input type="radio" name="perm_{$permiso.id}" value="x" {if ($permiso.valor === 'x')}checked="checked"{/if}/>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	{/if}
	<p><input type="submit" value="Guardar"></p>
</form>
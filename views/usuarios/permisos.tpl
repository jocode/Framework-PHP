<h2>Permisos de Usuario</h2>

<h3>Usuario: {$info.usuario}<br/>Role: {$info.role}</h3>

<form name="form" method="post">
	<input type="hidden" name="guardar" value="1">
	{if isset($permisos) && count($permisos)}
	<table>
		<thead>
			<tr>
				<th>Permiso</th>
				<th</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$permisos item=permiso}
			{if $role.$permiso.valor == 1}
			{assign var="valor" value="habilitado"}
			{else}
			{assign var="valor" value="denegado"}
			{/if}
			<tr>
				<td>{$usuario.$permiso.permiso}</td>
				<td>
					<select name="perm_{$usuario.$permiso.id}">
						<option value="x" {if $usuario.$permiso.heredado} selected="true" {/if}>Heredado ({$valor})</option>
						<option value="1" {if $usuario.$permiso.valor == 1 && $usuario.$permiso.heredado == ''} selected="true" {/if}>Habilitado</option>
						<option value="" {if $usuario.$permiso.valor == '' && $usuario.$permiso.heredado == ''} selected="true" {/if}>Denegado</option>
					</select>
				</td>
			</tr>
			{/foreach}
		</tbody>
	</table>
	<input type="submit" value="Guardar">
	{/if}
</form>
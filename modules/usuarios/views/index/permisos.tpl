<div class="row justify-content-center">
	<div class="col-12">
		<h2 class="text-center">Permisos de Usuario</h2>
		<h4>Usuario: {$info.usuario}<br/>Role: {$info.role}</h4>

		<form name="form" method="post">
			<input type="hidden" name="guardar" value="1">
			{if isset($permisos) && count($permisos)}
			<table class="table table-bordered">
				<thead>
					<tr class="text-center">
						<th>Permiso</th>
						<th>Opción</th>
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
							<select name="perm_{$usuario.$permiso.id}" class="form-control">
								<option value="x" {if $usuario.$permiso.heredado} selected="true" {/if}>Heredado ({$valor})</option>
								<option value="1" {if $usuario.$permiso.valor == 1 && $usuario.$permiso.heredado == ''} selected="true" {/if}>Habilitado</option>
								<option value="" {if $usuario.$permiso.valor == '' && $usuario.$permiso.heredado == ''} selected="true" {/if}>Denegado</option>
							</select>
						</td>
					</tr>
					{/foreach}
				</tbody>
			</table>
			<input class="btn btn-success" type="submit" value="Guardar">
			{/if}
		</form>
	</div>
</div>
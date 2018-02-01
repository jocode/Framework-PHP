<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{$_layoutParams.root}">Inicio</a></li>
		<li class="breadcrumb-item"><a href="{$_layoutParams.root}acl/roles">Roles</a></li>
		<li class="breadcrumb-item active" aria-current="page">Permisos del Rol <strong>{$rol.role}</strong></li>
	</ol>
</nav>
<div class="row justify-content-center">
	<div class="col-6">
		<h2 class="text-center">Administración de Permisos del Rol</h2>
		<h4>Rol: {$rol.role}</h3>
			<hr/>
			<form name="form" method="post">
				<input type="hidden" name="guardar" value="1">

				{if isset($permisos) && count($permisos)}
				<table class="table table-bordered">
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
				<input class="btn btn-success" type="submit" value="Guardar">
			</form>
		</div>
	</div>
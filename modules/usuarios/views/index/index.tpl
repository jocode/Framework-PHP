<div class="row justify-content-center">
	<div class="col-12">
		<h2 class="text-center">Gestión de Usuarios</h2>

		{if isset($usuarios) && count($usuarios)}
		<table class="table table-bordered">
			<thead>
				<tr class="text-center">
					<th>ID</th>
					<th>Usuario</th>
					<th>Role</th>
					<th>Permisos</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$usuarios item=usuario}
				<tr>
					<td>{$usuario.id}</td>
					<td>{$usuario.usuario}</td>
					<td>{$usuario.role}</td>
					<td>
						<a href="{$_layoutParams.root}usuarios/index/permisos/{$usuario.id}">Permisos</a>
					</td>
				</tr>
				{/foreach}
			</tbody>
		</table>
		{/if}
	</div>
</div>
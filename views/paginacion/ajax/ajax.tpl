<table class="table table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>País</th>
			<th>Ciudad</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$datos item=$dato}
		<tr>
			<td>{$dato.id}</td>
			<td>{$dato.nombre}</td>
			<td>{$dato.pais}</td>
			<td>{$dato.ciudad}</td>
		</tr>
		{/foreach}
	</tbody>
</table>
{$paginacion|default:''}
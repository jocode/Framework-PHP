<table class="table table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$datos item=$dato}
		<tr>
			<td>{$dato.id}</td>
			<td>{$dato.nombre}</td>
		</tr>
		{/foreach}
	</tbody>
</table>
{$paginacion|default:''}
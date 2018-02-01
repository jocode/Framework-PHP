<h2>Últimos Posts</h2>

{if (isset($posts) && count($posts))}

	<table class="table table-bordered">
		<thead>
			<tr class="text-center">
				<th>ID</th>
				<th>Título</th>
				<th>Contenido</th>
				<th>Imágen</th>
				<th>Acciones</th>
			</tr>
		</thead>
		{foreach from=$posts item=post}
			<tr>
				<td>{$post.id}</td>
				<td>{$post.titulo}</td>
				<td>{$post.cuerpo}</td>
				<td>
					{if isset($post.imagen)}
					<a href="{$_layoutParams.root}public/img/post/{$post.imagen}">
						<img src="{$_layoutParams.root}public/img/post/thumb/thumb_{$post.imagen}">
					</a>
					{/if}
				</td>
				<td><a class="btn btn-warning btn-sm" href="{$_layoutParams.root}post/editar/{$post.id}">Editar</a>
				<a class="btn btn-danger btn-sm" href="{$_layoutParams.root}post/eliminar/{$post.id}">Eliminar</a></td>
			</tr>
		{/foreach}
	</table>

{else}
	<p><strong>No hay Posts...</strong></p>
{/if}

{$paginacion|default:''}

<p><a class="btn btn-success" href="{$_layoutParams.root}post/nuevo">Agregar Post</a></p>

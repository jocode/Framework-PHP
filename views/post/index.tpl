<h2>Últimos Posts</h2>

{if (isset($posts) && count($posts))}

	<table border="1">
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
				<td><a href="{$_layoutParams.root}post/editar/{$post.id}">Editar</a></td>
				<td><a href="{$_layoutParams.root}post/eliminar/{$post.id}">Eliminar</a></td>
			</tr>
		{/foreach}
	</table>

{else}
	<p><strong>No hay Posts...</strong></p>
{/if}

{$paginacion|default:''}

<p><a href="{$_layoutParams.root}post/nuevo">Agregar Post</a></p>

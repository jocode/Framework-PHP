<form id="form1" name="form" method="post" action="{$_layoutParams.root}post/editar/{$datos.id}">
	<input type="hidden" name="guardar" value="1"/>
	<p>Título<br/>
	<input type="text" name="titulo" value="{$datos.titulo|default: ''}" /></p>
	<p>Cuerpo del post<br/>
		<textarea name="cuerpo">{$datos.cuerpo|default: ''}</textarea>
	</p>
	<div>
		<input type="submit" value="Editar"/>
	</div>

</form>
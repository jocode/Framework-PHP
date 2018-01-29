<form id="form1" name="form" method="post" action="{$_layoutParams.root}post/nuevo" enctype="multipart/form-data">
	<input type="hidden" name="guardar" value="1"/>
	<p>Título<br/>
	<input type="text" name="titulo" value="{$datos.titulo|default: ''}" /></p>
	<p>Cuerpo del post<br/>
		<textarea name="cuerpo">{$datos.cuerpo|default: ''}</textarea>
	</p>
	<div>
		<label for="imagen">Imagen</label><br/>
		<input type="file" name="imagen" id="imagen">
	</div>
	<br>
	<div>
		<input type="submit" value="Guardar"/>
	</div>

</form>
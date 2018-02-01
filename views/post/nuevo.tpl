<div class="row justify-content-center">
	<div class="col-6">
		<h2 class="text-center">Nuevo Post</h2>
		<form id="form1" name="form" method="post" action="{$_layoutParams.root}post/nuevo" enctype="multipart/form-data">
			<input type="hidden" name="guardar" value="1"/>
			<div class="form-group">
				<label>Título</label>
				<input class="form-control" type="text" name="titulo" value="{$datos.titulo|default: ''}" />
			</div>
			<div class="form-group">
				<label>Cuerpo del post</label>
				<textarea class="form-control" name="cuerpo">{$datos.cuerpo|default: ''}</textarea>
			</div>
			<div class="form-group">
				<div class="custom-file">
				<input type="file" class="custom-file-input" id="imagen" name="imagen">
				<label class="custom-file-label" for="imagen">Seleccionar Imagen</label>
			</div>
			</div>
			<input class="btn btn-success" type="submit" value="Guardar"/>
		</form>
	</div>
</div>
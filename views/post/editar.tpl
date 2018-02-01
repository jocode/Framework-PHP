<div class="row justify-content-center">
	<div class="col-6">
		<h2 class="text-center">Editar Post</h2>
		<form id="form1" name="form" method="post" action="{$_layoutParams.root}post/editar/{$datos.id}">
			<input type="hidden" name="guardar" value="1"/>
			<div class="form-group">
				<label>Título</label>
				<input class="form-control" type="text" name="titulo" value="{$datos.titulo|default: ''}" />
			</div>
			<div class="form-group">
				<label>Cuerpo del Post</label>
				<textarea class="form-control" name="cuerpo">{$datos.cuerpo|default: ''}</textarea>
			</div>
			<input class="btn btn-success" type="submit" value="Editar"/>
			</form>
		</div>
	</div>
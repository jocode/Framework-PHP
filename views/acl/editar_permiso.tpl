<div class="row justify-content-center">
	<div class="col-4">
		<h2 class="text-center">Editar Permiso</h2>

		<form name="form" method="post">
			<input type="hidden" name="guardar" value="1">
			<div class="form-group">
				<label>Permiso</label>
				<input class="form-control" type="text" name="permiso" value="{$permiso.permiso}"/>
			</div>
			<div class="form-group">
				<label>Key</label>
				<input class="form-control" type="´text" name="key" value="{$permiso.key}"/>
			</div>

			<input class="btn btn-success" type="submit" value="Editar">
		</form>
	</div>
</div>
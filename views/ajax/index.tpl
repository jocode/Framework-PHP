<div class="row justify-content-center">
	<div class="col-6">
		<h2 class="text-center">Ejemplo de Ajax</h2>
		<form name="form" method="post">
			<div class="form-group">
				<label for="pais">País</label>
				<select id="pais" name="pais" class="form-control">
					<option value="0">- Seleccione un País -</option>
					{foreach from=$paises item=pais}
					<option value="{$pais.id}">{$pais.pais}</option>
					{/foreach}
				</select>
			</div>
			<div class="form-group">
				<label for="ciudad">Ciudad</label>
				<select name="ciudad" id="ciudad" class="form-control">
					<option value="0">- Seleccione una Ciudad -</option>
				</select>
			</div>
			<div class="form-group">
				<label for="nuevaCiudad">Ciudad a insertar</label>
				<input type="text" name="nuevaCiudad" id="nuevaCiudad" class="form-control">
			</div>
			<input class="btn btn-success" type="button" id="btn_insertar" value="Insertar">
		</form>
	</div>
</div>
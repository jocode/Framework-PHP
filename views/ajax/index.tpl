<h2>Ejemplo de Ajax</h2>
<form name="form" method="post">
	<div>
		<label for="pais">País</label>
		<select id="pais" name="pais">
			<option value="0">- Seleccione un País -</option>
			{foreach from=$paises item=pais}
				<option value="{$pais.id}">{$pais.pais}</option>
			{/foreach}
		</select>
	</div><br>
	<div>
		<label for="ciudad">Ciudad</label>
		<select name="ciudad" id="ciudad">
			<option value="0">- Seleccione una Ciudad -</option>
		</select>
	</div>
	<hr>
	<div>
		<label for="nuevaCiudad">Ciudad a insertar</label>
		<input type="text" name="nuevaCiudad" id="nuevaCiudad">
		<input type="button" id="btn_insertar" value="Insertar">
	</div>
</form>
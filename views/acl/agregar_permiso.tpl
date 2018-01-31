<h2>Guardar Permiso</h2>

<form name="form" method="post">
	<input type="hidden" name="guardar" value="1">
	<p> Nombre del Permiso <br/>
		<input type="text" name="permiso" value="{$datos.permiso|default:''}"/>
	</p>
	<p>Key <br/>
		<input type="´text" name="key" value="{$datos.key|default:''}"/>
	</p>

	<br/>
	<input type="submit" value="Guardar">

</form>
<h2>Editar Permiso</h2>

<form name="form" method="post">
	<input type="hidden" name="guardar" value="1">
	<p> Nombre del Permiso <br/>
		<input type="text" name="permiso" value="{$permiso.permiso}"/>
	</p>
	<p>Key <br/>
		<input type="´text" name="key" value="{$permiso.key}"/>
	</p>

	<br/>
	<input type="submit" value="Editar">

</form>
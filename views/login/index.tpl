<h2>Iniciar Sesión</h2>
<form name="form" method="post">
	<input type="hidden" name="enviar" value="1">
	<div>
		<p>Usuario</p>
		<input type="text" name="usuario" value="{$datos.usuario|default: ''}">
	</div>
	<div>
		<p>Contraseña</p>
		<input type="password" name="pass">
	</div>
	<br>
	<div>
		<input type="submit" value="Enviar">
	</div>
</form>
<h2>Registro de Usuarios</h2>
<form name="form" method="post">
	<input type="hidden" name="enviar" value="1">
	<div>
		<p>Nombre</p>
		<input type="text" name="nombre" value="{$datos.nombre|default: ''}">
	</div>
	<div>
		<p>Usuario</p>
		<input type="text" name="usuario" value="{$datos.usuario|default: ''}">
	</div>
	<div>
		<p>Email</p>
		<input type="text" name="email" value="{$datos.email|default: ''}">
	</div>
	<div>
		<p>Contraseña</p>
		<input type="password" name="pass">
	</div>
	<div>
		<p>Contraseña</p>
		<input type="password" name="confirmar">
	</div>
	<br>
	<div>
		<input type="submit" value="Enviar">
	</div>
</form>
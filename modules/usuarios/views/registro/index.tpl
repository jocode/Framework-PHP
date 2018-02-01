<div class="row justify-content-center">
	<div class="col-6">
		<h2 class="text-center">Registro de Usuarios</h2>
		<form name="form" method="post">
			<input type="hidden" name="enviar" value="1">
			<div class="form-group">
				<label>Nombre</label>
				<input class="form-control" type="text" name="nombre" value="{$datos.nombre|default: ''}">
			</div>
			<div class="form-group">
				<label>Usuario</label>
				<input class="form-control" type="text" name="usuario" value="{$datos.usuario|default: ''}">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input class="form-control" type="text" name="email" value="{$datos.email|default: ''}">
			</div>
			<div class="form-group">
				<label>Contraseña</label>
				<input class="form-control" type="password" name="pass">
			</div>
			<div class="form-group">
				<label>Contraseña</label>
				<input class="form-control" type="password" name="confirmar">
			</div>
			<br>
			<div>
				<input class="btn btn-success" type="submit" value="Enviar">
			</div>
		</form>
	</div>
</div>
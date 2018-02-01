<div class="row justify-content-center">
  <div class="col-6">
    <h2 class="text-center">Iniciar Sesión</h2>

    <form name="form" method="post">
     <input type="hidden" name="enviar" value="1">
     <div class="form-group">
      <label for="usuario">Usuario</label>
      <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Ingrese el usuario" value="{$datos.usuario|default: ''}">
    </div>
    <div class="form-group">
      <label for="password">Contraseña</label>
      <input type="password" class="form-control" name="pass" id="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>
</div>


<div class="card">
  <div class="card-body">
    <h2 class="text-center">{$mensaje|default:''}</h2>
  </div>
</div>

<br>
<div class="d-flex justify-content-center">
	<a href="{$_layoutParams.root}" style="margin: 10px;">Ir al inicio  </a> 
	<a href="javascript:history.back(1)" style="margin: 10px;">Volver a la página anterior  </a>
{if ( !Session::get('autenticado') )}
	<a href="{$_layoutParams.root}usuarios/login" style="margin: 10px;">Iniciar Sesión</a>
{/if}
</div>
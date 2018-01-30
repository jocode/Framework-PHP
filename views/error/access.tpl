<h2>{$mensaje|default:''}</h2>

<p>&nbsp;</p>
<a href="{$_layoutParams.root}">Ir al inicio</a> 
<a href="javascript:history.back(1)">Volver a la página anterior</a>

{if ( !Session::get('autenticado') )}
	<a href="{$_layoutParams.root}login">Iniciar Sesión</a>
{/if}
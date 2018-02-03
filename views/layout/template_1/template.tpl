<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>{$titulo|default: "Titulo"}</title>
	<link rel="stylesheet" type="text/css" href="{$_layoutParams.root}public/css/bootstrap.min.css">
	<script type="text/javascript" src="{$_layoutParams.root}public/js/jquery.min.js"></script>
	<script type="text/javascript" src="{$_layoutParams.root}public/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="{$_layoutParams.root}public/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<a class="navbar-brand" href="{$_layoutParams.root}">{$_layoutParams.configs.app_name}</a>
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				{if isset($_layoutParams.menu)}
				{foreach from=$_layoutParams.menu item=menu}
				{if isset($_layoutParams.item) && $_layoutParams.item == $menu.id }
				{assign var="_item_style" value='active'}
				{else}
				{assign var="_item_style" value=''}
				{/if}
				<li class="nav-item {$_item_style}">
					<a class="nav-link" href="{$menu.enlace}">{$menu.titulo}</a>
				</li>
				{/foreach}
				{/if}
			</ul>
			{if Session::get('autenticado')}
			<div class="my-2 my-lg-0">
				<a class="btn btn-danger" href="{$_layoutParams.root}usuarios/login/cerrar">Cerrar Sesión</a>
			</div>
			{else}
			<form class="form-inline my-2 my-lg-0" name="ingresar" method="post" action="{$_layoutParams.root}usuarios/login">
				<input type="hidden" name="enviar" value="1">
				<input class="form-control mr-sm-2" type="text" placeholder="Usuario" name="usuario" value="{$datos.usuario|default: ''}">
				<input class="form-control mr-sm-2" type="password" placeholder="Contraseña" name="pass">
				<button class="btn btn-success my-2 my-sm-0" type="submit">Ingresar</button>
			</form>
			{/if}
			
		</div>
	</nav>
	<div class="container" style="margin-top: 20px;">
		<!-- En este contenedor vamos a mostrar los errores-->
		<div id="content_error">
			<noscript><p>Para el correcto funcionamiento debe tener el soporte de Javascript habilitado</p></noscript>
			{if isset($_error)}
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Hey compadre!</strong> {$_error}
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			{/if}
			{if isset($_mensaje)}
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Hey compadre!</strong> {$_mensaje}
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			{/if}
		</div>

		<div class="row">
			<div class="col-8"	>
				{include file=$_contenido}
			</div>
			<div class="col-4">
				<!-- Menú lateral -->
				<div class="d-flex justify-content-center">
					<div class="btn-group btn-group-vertical">
						{if isset($_layoutParams.menuLateral)}
						{foreach from=$_layoutParams.menuLateral item=item}
						{if isset($_layoutParams.item) && $_layoutParams.item == $item.id }
						{assign var="_item_style" value='active'}
						{else}
						{assign var="_item_style" value=''}
						{/if}
						<a class="btn btn-light {$_item_style}" href="{$item.enlace}">{$item.titulo}</a>
						{/foreach}
						{/if}
					</div>
				</div>
				<!-- /menú lateral -->
			</div>
		</div>

		<div class="d-flex justify-content-center" id="footer" style="margin: 20px;">
			Copyright &copy; {$_layoutParams.configs.app_name} {date('Y')}
		</div>
		{if (isset($_layoutParams.js) && count($_layoutParams.js))}
		{foreach from=$_layoutParams.js item=js}
		<script type="text/javascript" src="{$js}"></script>
		{/foreach}
		{/if}
		<script type="text/javascript">
			var _root_ = "{$_layoutParams.root}";
		</script>
	</div>
</body>
</html>

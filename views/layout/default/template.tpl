<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>{$titulo|default: "Titulo"}</title>
	<script type="text/javascript" src="{$_layoutParams.root}public/js/jquery.min.js"></script>
	<script type="text/javascript" src="{$_layoutParams.root}public/js/jquery.validate.min.js"></script>
</head>
<body>
	<div id="main">
		<div id="header">
			<h1>{$_layoutParams.configs.app_name}</h1>
		</div>
		<div id="menu_top">
			<ul>
			{if isset($_layoutParams.menu)}
			{foreach from=$_layoutParams.menu item=menu}
			{if isset($_layoutParams.item) && $_layoutParams.item == $menu.id }
			{assign var="_item_style" value='current'}
			{else}
			{assign var="_item_style" value=''}
			{/if}
			<li><a class="{$_item_style}" href="{$menu.enlace}">{$menu.titulo}</a></li>
			{/foreach}
			{/if}
			</ul>
		</div>
		<!-- En este contenedor vamos a mostrar los errores-->
		<div id="content">
			<noscript><p>Para el correcto funcionamiento debe tener el soporte de Javascript habilitado</p></noscript>
			{if isset($_error)}
			<div class="error">
				{$_error}
			</div>
			{/if}
			{if isset($_mensaje)}
			<div class="success">
				{$_mensaje}
			</div>
			{/if}
		</div>

		{include file=$_contenido}

		<div id="footer">
			Copyright &copy; {$_layoutParams.configs.app_name} {date('Y')}
		</div>
		{if (isset($_layoutParams.js) && count($_layoutParams.js))}
		{foreach from=$_layoutParams.js item=js}
		<script type="text/javascript" src="{$js}"></script>
		{/foreach}
		{/if}
	</div>
</body>
</html>

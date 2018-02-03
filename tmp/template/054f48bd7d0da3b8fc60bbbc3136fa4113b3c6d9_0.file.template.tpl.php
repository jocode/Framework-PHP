<?php
/* Smarty version 3.1.30, created on 2018-02-03 22:04:04
  from "C:\xampp\htdocs\Framework-PHP\views\layout\template_1\template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7623c4c75da3_03460008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '054f48bd7d0da3b8fc60bbbc3136fa4113b3c6d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\layout\\template_1\\template.tpl',
      1 => 1517691843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7623c4c75da3_03460008 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Titulo" : $tmp);?>
</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/bootstrap.min.css">
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.validate.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
"><?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['configs']['app_name'];?>
</a>
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['menu'])) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_layoutParams']->value['menu'], 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?>
				<?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['item']) && $_smarty_tpl->tpl_vars['_layoutParams']->value['item'] == $_smarty_tpl->tpl_vars['menu']->value['id']) {?>
				<?php $_smarty_tpl->_assignInScope('_item_style', 'active');
?>
				<?php } else { ?>
				<?php $_smarty_tpl->_assignInScope('_item_style', '');
?>
				<?php }?>
				<li class="nav-item <?php echo $_smarty_tpl->tpl_vars['_item_style']->value;?>
">
					<a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['enlace'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['titulo'];?>
</a>
				</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				<?php }?>
			</ul>
			<?php if (Session::get('autenticado')) {?>
			<div class="my-2 my-lg-0">
				<a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/login/cerrar">Cerrar Sesión</a>
			</div>
			<?php } else { ?>
			<form class="form-inline my-2 my-lg-0" name="ingresar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/login">
				<input type="hidden" name="enviar" value="1">
				<input class="form-control mr-sm-2" type="text" placeholder="Usuario" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
">
				<input class="form-control mr-sm-2" type="password" placeholder="Contraseña" name="pass">
				<button class="btn btn-success my-2 my-sm-0" type="submit">Ingresar</button>
			</form>
			<?php }?>
			
		</div>
	</nav>
	<div class="container" style="margin-top: 20px;">
		<!-- En este contenedor vamos a mostrar los errores-->
		<div id="content_error">
			<noscript><p>Para el correcto funcionamiento debe tener el soporte de Javascript habilitado</p></noscript>
			<?php if (isset($_smarty_tpl->tpl_vars['_error']->value)) {?>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Hey compadre!</strong> <?php echo $_smarty_tpl->tpl_vars['_error']->value;?>

				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['_mensaje']->value)) {?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Hey compadre!</strong> <?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>

				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php }?>
		</div>

		<div class="row">
			<div class="col-8"	>
				<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

			</div>
			<div class="col-4">
				<!-- Menú lateral -->
				<div class="d-flex justify-content-center">
					<div class="btn-group btn-group-vertical">
						<?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['menuLateral'])) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_layoutParams']->value['menuLateral'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
						<?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['item']) && $_smarty_tpl->tpl_vars['_layoutParams']->value['item'] == $_smarty_tpl->tpl_vars['item']->value['id']) {?>
						<?php $_smarty_tpl->_assignInScope('_item_style', 'active');
?>
						<?php } else { ?>
						<?php $_smarty_tpl->_assignInScope('_item_style', '');
?>
						<?php }?>
						<a class="btn btn-light <?php echo $_smarty_tpl->tpl_vars['_item_style']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['enlace'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['titulo'];?>
</a>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						<?php }?>
					</div>
				</div>
				<!-- /menú lateral -->
			</div>
		</div>

		<div class="d-flex justify-content-center" id="footer" style="margin: 20px;">
			Copyright &copy; <?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['configs']['app_name'];?>
 <?php echo date('Y');?>

		</div>
		<?php if ((isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js']) && count($_smarty_tpl->tpl_vars['_layoutParams']->value['js']))) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_layoutParams']->value['js'], 'js');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
?>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"><?php echo '</script'; ?>
>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		<?php }?>
		<?php echo '<script'; ?>
 type="text/javascript">
			var _root_ = "<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
";
		<?php echo '</script'; ?>
>
	</div>
</body>
</html>
<?php }
}

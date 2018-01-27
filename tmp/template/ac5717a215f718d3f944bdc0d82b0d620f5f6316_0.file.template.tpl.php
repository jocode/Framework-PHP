<?php
/* Smarty version 3.1.30, created on 2018-01-27 00:56:37
  from "C:\xampp\htdocs\Framework-PHP\views\layout\default\template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6bc035d66822_59325566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac5717a215f718d3f944bdc0d82b0d620f5f6316' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\layout\\default\\template.tpl',
      1 => 1517010995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6bc035d66822_59325566 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Titulo" : $tmp);?>
</title>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
'public/js/jquery.min.js'"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
'public/js/jquery.validate.min.js';"><?php echo '</script'; ?>
>
</head>
<body>
	<div id="main">
		<div id="header">
			<h1><?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['configs']['app_name'];?>
</h1>
		</div>
		<div id="menu_top">
			<ul>
			<?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['menu'])) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_layoutParams']->value['menu'], 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?>
			<?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['item']) && $_smarty_tpl->tpl_vars['_layoutParams']->value['item'] == $_smarty_tpl->tpl_vars['menu']->value['id']) {?>
			<?php $_smarty_tpl->_assignInScope('_item_style', 'current');
?>
			<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('_item_style', '');
?>
			<?php }?>
			<li><a class="<?php echo $_smarty_tpl->tpl_vars['_item_style']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['enlace'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['titulo'];?>
</a></li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			<?php }?>
			</ul>
		</div>
		<!-- En este contenedor vamos a mostrar los errores-->
		<div id="content">
			<noscript><p>Para el correcto funcionamiento debe tener el soporte de Javascript habilitado</p></noscript>
			<?php if (isset($_smarty_tpl->tpl_vars['_error']->value)) {?>
			<div class="error">
				<?php echo $_smarty_tpl->tpl_vars['_error']->value;?>

			</div>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['_mensaje']->value)) {?>
			<div class="success">
				<?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>

			</div>
			<?php }?>
		</div>

		<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


		<div id="footer">
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
	</div>
</body>
</html>
<?php }
}

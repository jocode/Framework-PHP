<?php
/* Smarty version 3.1.30, created on 2018-01-28 22:00:38
  from "C:\xampp\htdocs\Framework-PHP\views\registro\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6e39f6ddeba0_78493248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50fe3fe70fe99c2b24528f8cc6afdc0f5dc242e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\registro\\index.tpl',
      1 => 1517173236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6e39f6ddeba0_78493248 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Registro de Usuarios</h2>
<form name="form" method="post">
	<input type="hidden" name="enviar" value="1">
	<div>
		<p>Nombre</p>
		<input type="text" name="nombre" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
">
	</div>
	<div>
		<p>Usuario</p>
		<input type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
">
	</div>
	<div>
		<p>Email</p>
		<input type="text" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
">
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
</form><?php }
}

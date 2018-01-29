<?php
/* Smarty version 3.1.30, created on 2018-01-28 21:16:37
  from "C:\xampp\htdocs\Framework-PHP\views\login\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6e2fa5e03925_79442372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50ee4857f11c3027bd538dfceb499a2cc970be6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\login\\index.tpl',
      1 => 1517170530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6e2fa5e03925_79442372 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Iniciar Sesión</h2>
<form name="form" method="post">
	<input type="hidden" name="enviar" value="1">
	<div>
		<p>Usuario</p>
		<input type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
">
	</div>
	<div>
		<p>Contraseña</p>
		<input type="password" name="pass">
	</div>
	<br>
	<div>
		<input type="submit" value="Enviar">
	</div>
</form><?php }
}

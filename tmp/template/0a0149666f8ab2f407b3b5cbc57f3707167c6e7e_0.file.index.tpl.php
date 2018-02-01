<?php
/* Smarty version 3.1.30, created on 2018-02-01 15:10:52
  from "C:\xampp\htdocs\Framework-PHP\modules\usuarios\views\login\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a731fec29aca9_23691523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a0149666f8ab2f407b3b5cbc57f3707167c6e7e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\modules\\usuarios\\views\\login\\index.tpl',
      1 => 1517170530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a731fec29aca9_23691523 (Smarty_Internal_Template $_smarty_tpl) {
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

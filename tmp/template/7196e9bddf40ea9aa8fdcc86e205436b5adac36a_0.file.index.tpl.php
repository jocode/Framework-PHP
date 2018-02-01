<?php
/* Smarty version 3.1.30, created on 2018-02-01 19:18:24
  from "C:\xampp\htdocs\Framework-PHP\modules\usuarios\views\registro\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7359f0ef9a60_95368036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7196e9bddf40ea9aa8fdcc86e205436b5adac36a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\modules\\usuarios\\views\\registro\\index.tpl',
      1 => 1517509104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7359f0ef9a60_95368036 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row justify-content-center">
	<div class="col-6">
		<h2 class="text-center">Registro de Usuarios</h2>
		<form name="form" method="post">
			<input type="hidden" name="enviar" value="1">
			<div class="form-group">
				<label>Nombre</label>
				<input class="form-control" type="text" name="nombre" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
">
			</div>
			<div class="form-group">
				<label>Usuario</label>
				<input class="form-control" type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input class="form-control" type="text" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
">
			</div>
			<div class="form-group">
				<label>Contraseña</label>
				<input class="form-control" type="password" name="pass">
			</div>
			<div class="form-group">
				<label>Contraseña</label>
				<input class="form-control" type="password" name="confirmar">
			</div>
			<br>
			<div>
				<input class="btn btn-success" type="submit" value="Enviar">
			</div>
		</form>
	</div>
</div><?php }
}

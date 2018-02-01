<?php
/* Smarty version 3.1.30, created on 2018-02-01 19:47:40
  from "C:\xampp\htdocs\Framework-PHP\views\acl\agregar_permiso.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7360cc5a7524_54747178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29d3be4701905f49ba722597314812e1e4ac185d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\acl\\agregar_permiso.tpl',
      1 => 1517510851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7360cc5a7524_54747178 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row justify-content-center">
	<div class="col-4">

		<h2 class="text-center">Guardar Permiso</h2>

		<form name="form" method="post">
			<input type="hidden" name="guardar" value="1">
			<div class="form-group">
				<label>Permiso</label>
				<input class="form-control" type="text" name="permiso" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['permiso'])===null||$tmp==='' ? '' : $tmp);?>
"/>
			</div>
			<div class="form-group">
				<label>Key</label>
				<input class="form-control" type="text" name="key" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['key'])===null||$tmp==='' ? '' : $tmp);?>
"/>
			</div>

			<br/>
			<input class="btn btn-success" type="submit" value="Guardar">

		</form>
	</div>
</div><?php }
}

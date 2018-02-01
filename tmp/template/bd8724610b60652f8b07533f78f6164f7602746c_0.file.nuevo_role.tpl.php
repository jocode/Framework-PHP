<?php
/* Smarty version 3.1.30, created on 2018-02-01 19:24:31
  from "C:\xampp\htdocs\Framework-PHP\views\acl\nuevo_role.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a735b5fa2c2a7_42715101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd8724610b60652f8b07533f78f6164f7602746c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\acl\\nuevo_role.tpl',
      1 => 1517509468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a735b5fa2c2a7_42715101 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row justify-content-center">
	<div class="col-4">

		<h2 class="text-center">Agregar Rol</h2>

		<form name="form" method="post">
			<input type="hidden" name="guardar" value="1">
			<div class="form-group">
				<input class="form-control" type="text" name="rol">
			</div>
			<input class="btn btn-success" type="submit" value="Guardar"/>
		</form>
	</div>
</div><?php }
}

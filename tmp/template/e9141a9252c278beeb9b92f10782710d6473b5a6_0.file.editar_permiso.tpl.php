<?php
/* Smarty version 3.1.30, created on 2018-02-01 19:47:47
  from "C:\xampp\htdocs\Framework-PHP\views\acl\editar_permiso.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7360d30ce573_45795519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9141a9252c278beeb9b92f10782710d6473b5a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\acl\\editar_permiso.tpl',
      1 => 1517510804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7360d30ce573_45795519 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row justify-content-center">
	<div class="col-4">
		<h2 class="text-center">Editar Permiso</h2>

		<form name="form" method="post">
			<input type="hidden" name="guardar" value="1">
			<div class="form-group">
				<label>Permiso</label>
				<input class="form-control" type="text" name="permiso" value="<?php echo $_smarty_tpl->tpl_vars['permiso']->value['permiso'];?>
"/>
			</div>
			<div class="form-group">
				<label>Key</label>
				<input class="form-control" type="´text" name="key" value="<?php echo $_smarty_tpl->tpl_vars['permiso']->value['key'];?>
"/>
			</div>

			<input class="btn btn-success" type="submit" value="Editar">
		</form>
	</div>
</div><?php }
}

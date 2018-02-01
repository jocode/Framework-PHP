<?php
/* Smarty version 3.1.30, created on 2018-02-02 01:31:01
  from "C:\xampp\htdocs\Framework-PHP\modules\usuarios\views\index\permisos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a73b145cd8b39_25351741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a939b679aa3f13a5a9ef4d68335182e7067e958' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\modules\\usuarios\\views\\index\\permisos.tpl',
      1 => 1517531460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a73b145cd8b39_25351741 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row justify-content-center">
	<div class="col-12">
		<h2 class="text-center">Permisos de Usuario</h2>
		<h4>Usuario: <?php echo $_smarty_tpl->tpl_vars['info']->value['usuario'];?>
<br/>Role: <?php echo $_smarty_tpl->tpl_vars['info']->value['role'];?>
</h4>

		<form name="form" method="post">
			<input type="hidden" name="guardar" value="1">
			<?php if (isset($_smarty_tpl->tpl_vars['permisos']->value) && count($_smarty_tpl->tpl_vars['permisos']->value)) {?>
			<table class="table table-bordered">
				<thead>
					<tr class="text-center">
						<th>Permiso</th>
						<th>Opción</th>
					</tr>
				</thead>
				<tbody>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permisos']->value, 'permiso');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['permiso']->value) {
?>
					<?php if ($_smarty_tpl->tpl_vars['role']->value[$_smarty_tpl->tpl_vars['permiso']->value]['valor'] == 1) {?>
					<?php $_smarty_tpl->_assignInScope('valor', "habilitado");
?>
					<?php } else { ?>
					<?php $_smarty_tpl->_assignInScope('valor', "denegado");
?>
					<?php }?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['permiso']->value]['permiso'];?>
</td>
						<td>
							<select name="perm_<?php echo $_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['permiso']->value]['id'];?>
" class="form-control">
								<option value="x" <?php if ($_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['permiso']->value]['heredado']) {?> selected="true" <?php }?>>Heredado (<?php echo $_smarty_tpl->tpl_vars['valor']->value;?>
)</option>
								<option value="1" <?php if ($_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['permiso']->value]['valor'] == 1 && $_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['permiso']->value]['heredado'] == '') {?> selected="true" <?php }?>>Habilitado</option>
								<option value="" <?php if ($_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['permiso']->value]['valor'] == '' && $_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['permiso']->value]['heredado'] == '') {?> selected="true" <?php }?>>Denegado</option>
							</select>
						</td>
					</tr>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</tbody>
			</table>
			<input class="btn btn-success" type="submit" value="Guardar">
			<?php }?>
		</form>
	</div>
</div><?php }
}

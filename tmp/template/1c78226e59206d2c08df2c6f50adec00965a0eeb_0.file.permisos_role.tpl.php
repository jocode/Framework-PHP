<?php
/* Smarty version 3.1.30, created on 2018-02-01 19:36:14
  from "C:\xampp\htdocs\Framework-PHP\views\acl\permisos_role.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a735e1e15bc11_70968305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c78226e59206d2c08df2c6f50adec00965a0eeb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\acl\\permisos_role.tpl',
      1 => 1517510172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a735e1e15bc11_70968305 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Inicio</a></li>
		<li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Roles</a></li>
		<li class="breadcrumb-item active" aria-current="page">Permisos del Rol <strong><?php echo $_smarty_tpl->tpl_vars['rol']->value['role'];?>
</strong></li>
	</ol>
</nav>
<div class="row justify-content-center">
	<div class="col-6">
		<h2 class="text-center">Administración de Permisos del Rol</h2>
		<h4>Rol: <?php echo $_smarty_tpl->tpl_vars['rol']->value['role'];?>
</h3>
			<hr/>
			<form name="form" method="post">
				<input type="hidden" name="guardar" value="1">

				<?php if (isset($_smarty_tpl->tpl_vars['permisos']->value) && count($_smarty_tpl->tpl_vars['permisos']->value)) {?>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Permiso</th>
							<th>Habilitado</th>
							<th>Denegado</th>
							<th>Ignorar</th>
						</tr>
					</thead>
					<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permisos']->value, 'permiso');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['permiso']->value) {
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['permiso']->value['nombre'];?>
</td>
							<td>
								<input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['permiso']->value['id'];?>
" value="1" <?php if (($_smarty_tpl->tpl_vars['permiso']->value['valor'] == 1)) {?>checked="checked"<?php }?>/>
							</td>
							<td>
								<input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['permiso']->value['id'];?>
" value="" <?php if (($_smarty_tpl->tpl_vars['permiso']->value['valor'] == '')) {?>checked="checked"<?php }?>/>
							</td>
							<td>
								<input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['permiso']->value['id'];?>
" value="x" <?php if (($_smarty_tpl->tpl_vars['permiso']->value['valor'] === 'x')) {?>checked="checked"<?php }?>/>
							</td>
						</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</tbody>
				</table>
				<?php }?>
				<input class="btn btn-success" type="submit" value="Guardar">
			</form>
		</div>
	</div><?php }
}

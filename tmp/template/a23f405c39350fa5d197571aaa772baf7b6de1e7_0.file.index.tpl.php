<?php
/* Smarty version 3.1.30, created on 2018-02-02 01:31:32
  from "C:\xampp\htdocs\Framework-PHP\modules\usuarios\views\index\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a73b164cb1e98_21827918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a23f405c39350fa5d197571aaa772baf7b6de1e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\modules\\usuarios\\views\\index\\index.tpl',
      1 => 1517531491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a73b164cb1e98_21827918 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row justify-content-center">
	<div class="col-12">
		<h2 class="text-center">Gestión de Usuarios</h2>

		<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value) && count($_smarty_tpl->tpl_vars['usuarios']->value)) {?>
		<table class="table table-bordered">
			<thead>
				<tr class="text-center">
					<th>ID</th>
					<th>Usuario</th>
					<th>Role</th>
					<th>Permisos</th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['usuario'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['role'];?>
</td>
					<td>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/index/permisos/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
">Permisos</a>
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
	</div>
</div><?php }
}

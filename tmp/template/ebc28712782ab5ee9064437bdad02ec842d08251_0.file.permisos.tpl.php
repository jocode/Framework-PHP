<?php
/* Smarty version 3.1.30, created on 2018-02-01 19:43:43
  from "C:\xampp\htdocs\Framework-PHP\views\acl\permisos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a735fdfad2f50_78371235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebc28712782ab5ee9064437bdad02ec842d08251' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\acl\\permisos.tpl',
      1 => 1517510622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a735fdfad2f50_78371235 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Permisos</h2>

<table class="table table-bordered">
	<thead class="table table-bordered">
		<tr class="text-center">
			<th>Id</th>
			<th>Permiso</th>
			<th>Key</th>
			<th colspan="2">Acciones</th>
		</tr>
	</thead>
	<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permisos']->value, 'permiso');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['permiso']->value) {
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['permiso']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['permiso']->value['nombre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['permiso']->value['key'];?>
</td>
				<td>
					<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/editar_permiso/<?php echo $_smarty_tpl->tpl_vars['permiso']->value['id'];?>
">Editar</a>
				</td>
				<td>
					<a href="javascript:void(0);" onclick="eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/eliminar_permiso/<?php echo $_smarty_tpl->tpl_vars['permiso']->value['id'];?>
');">Eliminar</a>
				</td>
			</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</tbody>
</table>

<a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/agregar_permiso">Agregar</a>
<?php }
}

<?php
/* Smarty version 3.1.30, created on 2018-02-01 19:21:57
  from "C:\xampp\htdocs\Framework-PHP\views\acl\roles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a735ac569c992_61210842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3adaa98504615deb72e9f08e6ee33f42bf97f25' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\acl\\roles.tpl',
      1 => 1517509306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a735ac569c992_61210842 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2 class="text-center">Administración de Roles</h2>

<?php if (isset($_smarty_tpl->tpl_vars['roles']->value) && count($_smarty_tpl->tpl_vars['roles']->value)) {?>
<table class="table table-bordered">
 	<thead>
 		<tr class="text-center">
 			<th>ID</th>
 			<th>Role</th>
 			<th>Permisos</th>
 			<th colspan="2">Acciones</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'rol');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rol']->value) {
?>
 			<tr>
 				<td><?php echo $_smarty_tpl->tpl_vars['rol']->value['id_role'];?>
</td>
 				<td><?php echo $_smarty_tpl->tpl_vars['rol']->value['role'];?>
</td>
 				<td>
 					<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos_role/<?php echo $_smarty_tpl->tpl_vars['rol']->value['id_role'];?>
">Permisos</a>
 				</td>
 				<td>
 					<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/editar_role/<?php echo $_smarty_tpl->tpl_vars['rol']->value['id_role'];?>
">Editar</a>
 				</td>
 				<td>
					<a href="javascript:void(0);" onclick="eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/eliminar_role/<?php echo $_smarty_tpl->tpl_vars['rol']->value['id_role'];?>
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
<?php }?>

<a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/nuevo_role">Agregar Rol</a>
<?php }
}

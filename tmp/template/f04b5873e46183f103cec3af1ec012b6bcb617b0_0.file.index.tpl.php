<?php
/* Smarty version 3.1.30, created on 2018-02-01 22:01:46
  from "C:\xampp\htdocs\Framework-PHP\views\paginacion\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a73803a4a2587_22295695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f04b5873e46183f103cec3af1ec012b6bcb617b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\paginacion\\index.tpl',
      1 => 1517518903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a73803a4a2587_22295695 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
		</tr>
	</thead>
	<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datos']->value, 'dato');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->value) {
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
</td>
			</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</tbody>
</table>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion']->value)===null||$tmp==='' ? '' : $tmp);
}
}
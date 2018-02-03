<?php
/* Smarty version 3.1.30, created on 2018-02-03 01:28:31
  from "C:\xampp\htdocs\Framework-PHP\views\paginacion\ajax\ajax.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a75022f22c368_30547674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3045165c5ba8ec13c7e0b9fecf007e1ef4ecefd7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\paginacion\\ajax\\ajax.tpl',
      1 => 1517617699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a75022f22c368_30547674 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>País</th>
			<th>Ciudad</th>
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
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['pais'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['ciudad'];?>
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

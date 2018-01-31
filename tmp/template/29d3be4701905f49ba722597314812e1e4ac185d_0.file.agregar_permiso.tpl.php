<?php
/* Smarty version 3.1.30, created on 2018-01-31 02:51:16
  from "C:\xampp\htdocs\Framework-PHP\views\acl\agregar_permiso.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7121144eccc8_35915480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29d3be4701905f49ba722597314812e1e4ac185d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\acl\\agregar_permiso.tpl',
      1 => 1517363475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7121144eccc8_35915480 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Guardar Permiso</h2>

<form name="form" method="post">
	<input type="hidden" name="guardar" value="1">
	<p> Nombre del Permiso <br/>
		<input type="text" name="permiso" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['permiso'])===null||$tmp==='' ? '' : $tmp);?>
"/>
	</p>
	<p>Key <br/>
		<input type="´text" name="key" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['key'])===null||$tmp==='' ? '' : $tmp);?>
"/>
	</p>

	<br/>
	<input type="submit" value="Guardar">

</form><?php }
}

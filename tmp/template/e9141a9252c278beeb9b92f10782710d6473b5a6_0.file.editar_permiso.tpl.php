<?php
/* Smarty version 3.1.30, created on 2018-01-31 02:34:17
  from "C:\xampp\htdocs\Framework-PHP\views\acl\editar_permiso.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a711d199b93d2_02102184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9141a9252c278beeb9b92f10782710d6473b5a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\acl\\editar_permiso.tpl',
      1 => 1517362456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a711d199b93d2_02102184 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Editar Permiso</h2>

<form name="form" method="post">
	<input type="hidden" name="guardar" value="1">
	<p> Nombre del Permiso <br/>
		<input type="text" name="permiso" value="<?php echo $_smarty_tpl->tpl_vars['permiso']->value['permiso'];?>
"/>
	</p>
	<p>Key <br/>
		<input type="´text" name="key" value="<?php echo $_smarty_tpl->tpl_vars['permiso']->value['key'];?>
"/>
	</p>

	<br/>
	<input type="submit" value="Editar">

</form><?php }
}

<?php
/* Smarty version 3.1.30, created on 2018-01-30 20:33:32
  from "C:\xampp\htdocs\Framework-PHP\views\acl\nuevo_role.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a70c88c0a9c47_89160503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd8724610b60652f8b07533f78f6164f7602746c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\acl\\nuevo_role.tpl',
      1 => 1517340700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a70c88c0a9c47_89160503 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Agregar Rol</h2>

<form name="form" method="post">
	<input type="hidden" name="guardar" value="1">
	<p> Nombre del Rol <br/>
		<input type="text" name="rol">
	</p>
	<br/>
	<input type="submit" value="Guardar"/>
</form><?php }
}

<?php
/* Smarty version 3.1.30, created on 2018-01-30 20:50:36
  from "C:\xampp\htdocs\Framework-PHP\views\acl\editar_role.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a70cc8c3f13e9_71003414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66f26694c5fd59ee1bc1a855218568269fcc0765' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\acl\\editar_role.tpl',
      1 => 1517341832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a70cc8c3f13e9_71003414 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Agregar Rol</h2>

<form name="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/editar_role/<?php echo $_smarty_tpl->tpl_vars['role']->value['id_role'];?>
">
	<input type="hidden" name="guardar" value="1">
	<p> Nombre del Rol <br/>
		<input type="text" name="rol" value="<?php echo $_smarty_tpl->tpl_vars['role']->value['role'];?>
">
	</p>
	<br/>
	<input type="submit" value="Guardar"/>
</form><?php }
}

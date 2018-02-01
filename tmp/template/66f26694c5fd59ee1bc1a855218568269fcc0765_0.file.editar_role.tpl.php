<?php
/* Smarty version 3.1.30, created on 2018-02-01 19:32:55
  from "C:\xampp\htdocs\Framework-PHP\views\acl\editar_role.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a735d57e966d2_05336194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66f26694c5fd59ee1bc1a855218568269fcc0765' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\acl\\editar_role.tpl',
      1 => 1517509965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a735d57e966d2_05336194 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Inicio</a></li>
    <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Roles</a></li>
    <li class="breadcrumb-item active" aria-current="page">Editar Rol</li>
  </ol>
</nav>

<div class="row justify-content-center">
	<div class="col-4">
<h2>Editar Rol</h2>

<form name="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/editar_role/<?php echo $_smarty_tpl->tpl_vars['role']->value['id_role'];?>
">
	<input type="hidden" name="guardar" value="1">
	<div class="form-group">
		<input class="form-control" type="text" name="rol" value="<?php echo $_smarty_tpl->tpl_vars['role']->value['role'];?>
">
	</div>
	<input class="btn btn-success" type="submit" value="Guardar"/>
</form>
</div>
</div><?php }
}

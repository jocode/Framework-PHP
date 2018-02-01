<?php
/* Smarty version 3.1.30, created on 2018-02-01 19:14:17
  from "C:\xampp\htdocs\Framework-PHP\views\acl\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7358f9a7a654_62964864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ac84fbbb4f3524c55aee384fa4b4fb39c1da528' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\acl\\index.tpl',
      1 => 1517508856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7358f9a7a654_62964864 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row justify-content-center">
	<div class="col-6">
		<h2 class="text-center">Listas de Acceso</h2>
		<ul>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Roles</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos">Permisos</a></li>
		</ul>
	</div>
</div><?php }
}

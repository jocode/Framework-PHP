<?php
/* Smarty version 3.1.30, created on 2018-01-29 01:25:33
  from "C:\xampp\htdocs\Framework-PHP\views\post\editar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6e69fd73cf55_86931615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3520631da512726df4cc96a01400d35c3b1757a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\post\\editar.tpl',
      1 => 1517185528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6e69fd73cf55_86931615 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="form1" name="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/editar/<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
">
	<input type="hidden" name="guardar" value="1"/>
	<p>Título<br/>
	<input type="text" name="titulo" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['titulo'])===null||$tmp==='' ? '' : $tmp);?>
" /></p>
	<p>Cuerpo del post<br/>
		<textarea name="cuerpo"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['cuerpo'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
	</p>
	<div>
		<input type="submit" value="Editar"/>
	</div>

</form><?php }
}

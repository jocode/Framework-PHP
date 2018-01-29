<?php
/* Smarty version 3.1.30, created on 2018-01-29 14:42:51
  from "C:\xampp\htdocs\Framework-PHP\views\post\nuevo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6f24db9a3c48_38610007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41912726e8330c914833f1756669a57468a70d69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\post\\nuevo.tpl',
      1 => 1517233369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6f24db9a3c48_38610007 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="form1" name="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/nuevo" enctype="multipart/form-data">
	<input type="hidden" name="guardar" value="1"/>
	<p>Título<br/>
	<input type="text" name="titulo" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['titulo'])===null||$tmp==='' ? '' : $tmp);?>
" /></p>
	<p>Cuerpo del post<br/>
		<textarea name="cuerpo"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['cuerpo'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
	</p>
	<div>
		<label for="imagen">Imagen</label><br/>
		<input type="file" name="imagen" id="imagen">
	</div>
	<br>
	<div>
		<input type="submit" value="Guardar"/>
	</div>

</form><?php }
}

<?php
/* Smarty version 3.1.30, created on 2018-02-01 20:05:23
  from "C:\xampp\htdocs\Framework-PHP\views\post\nuevo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7364f33cc307_73006680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41912726e8330c914833f1756669a57468a70d69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\post\\nuevo.tpl',
      1 => 1517511922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7364f33cc307_73006680 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row justify-content-center">
	<div class="col-6">
		<h2 class="text-center">Nuevo Post</h2>
		<form id="form1" name="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/nuevo" enctype="multipart/form-data">
			<input type="hidden" name="guardar" value="1"/>
			<div class="form-group">
				<label>Título</label>
				<input class="form-control" type="text" name="titulo" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['titulo'])===null||$tmp==='' ? '' : $tmp);?>
" />
			</div>
			<div class="form-group">
				<label>Cuerpo del post</label>
				<textarea class="form-control" name="cuerpo"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['cuerpo'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
			</div>
			<div class="form-group">
				<div class="custom-file">
				<input type="file" class="custom-file-input" id="imagen" name="imagen">
				<label class="custom-file-label" for="imagen">Seleccionar Imagen</label>
			</div>
			</div>
			<input class="btn btn-success" type="submit" value="Guardar"/>
		</form>
	</div>
</div><?php }
}

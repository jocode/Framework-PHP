<?php
/* Smarty version 3.1.30, created on 2018-02-01 20:45:27
  from "C:\xampp\htdocs\Framework-PHP\views\post\editar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a736e57e89153_44279994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3520631da512726df4cc96a01400d35c3b1757a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\post\\editar.tpl',
      1 => 1517514325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a736e57e89153_44279994 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row justify-content-center">
	<div class="col-6">
		<h2 class="text-center">Editar Post</h2>
		<form id="form1" name="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/editar/<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
">
			<input type="hidden" name="guardar" value="1"/>
			<div class="form-group">
				<label>Título</label>
				<input class="form-control" type="text" name="titulo" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['titulo'])===null||$tmp==='' ? '' : $tmp);?>
" />
			</div>
			<div class="form-group">
				<label>Cuerpo del Post</label>
				<textarea class="form-control" name="cuerpo"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['cuerpo'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
			</div>
			<input class="btn btn-success" type="submit" value="Editar"/>
			</form>
		</div>
	</div><?php }
}

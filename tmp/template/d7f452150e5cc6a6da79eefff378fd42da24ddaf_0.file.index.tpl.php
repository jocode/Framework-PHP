<?php
/* Smarty version 3.1.30, created on 2018-02-01 21:25:12
  from "C:\xampp\htdocs\Framework-PHP\views\pdf\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7377a839d1b0_28847268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7f452150e5cc6a6da79eefff378fd42da24ddaf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\pdf\\index.tpl',
      1 => 1517516711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7377a839d1b0_28847268 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="card">
	<div class="card-body">
		<h2 class="text-center">Ejemplo de PDF</h2>
		<p>En este ejemplo se generará un archivo en PDF, usando la librería <b>fPDF</b>. Para generar el archivo dar clic en el botón de abajo.</p>

		<a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
pdf/pdf1" target="_blank">Generar PDF</a>
	</div>
</div><?php }
}

<?php
/* Smarty version 3.1.30, created on 2018-02-01 18:26:40
  from "C:\xampp\htdocs\Framework-PHP\views\error\access.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a734dd0a5e122_46214458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd886c9aa84abbf9b5a6046443977f2f62da6179a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\error\\access.tpl',
      1 => 1517505996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a734dd0a5e122_46214458 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card">
  <div class="card-body">
    <h2 class="text-center"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['mensaje']->value)===null||$tmp==='' ? '' : $tmp);?>
</h2>
  </div>
</div>

<br>
<div class="d-flex justify-content-center">
	<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
" style="margin: 10px;">Ir al inicio  </a> 
	<a href="javascript:history.back(1)" style="margin: 10px;">Volver a la página anterior  </a>
<?php if ((!Session::get('autenticado'))) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/login" style="margin: 10px;">Iniciar Sesión</a>
<?php }?>
</div><?php }
}

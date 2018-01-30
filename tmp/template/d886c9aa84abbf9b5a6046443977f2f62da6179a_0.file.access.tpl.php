<?php
/* Smarty version 3.1.30, created on 2018-01-29 20:59:38
  from "C:\xampp\htdocs\Framework-PHP\views\error\access.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6f7d2a9e6f98_38839309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd886c9aa84abbf9b5a6046443977f2f62da6179a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\error\\access.tpl',
      1 => 1517255975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6f7d2a9e6f98_38839309 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['mensaje']->value)===null||$tmp==='' ? '' : $tmp);?>
</h2>

<p>&nbsp;</p>
<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Ir al inicio</a> 
<a href="javascript:history.back(1)">Volver a la página anterior</a>

<?php if ((!Session::get('autenticado'))) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
login">Iniciar Sesión</a>
<?php }
}
}

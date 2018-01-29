<?php
/* Smarty version 3.1.30, created on 2018-01-28 19:56:53
  from "C:\xampp\htdocs\Framework-PHP\views\ajax\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6e1cf517c6e4_80967003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00ec7efe2964b3170633fc523bfc8fd1e235711a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\ajax\\index.tpl',
      1 => 1517165810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6e1cf517c6e4_80967003 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Ejemplo de Ajax</h2>
<form name="form" method="post">
	<div>
		<label for="pais">País</label>
		<select id="pais" name="pais">
			<option value="0">- Seleccione un País -</option>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paises']->value, 'pais');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pais']->value) {
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['pais']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['pais']->value['pais'];?>
</option>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</select>
	</div><br>
	<div>
		<label for="ciudad">Ciudad</label>
		<select name="ciudad" id="ciudad">
			<option value="0">- Seleccione una Ciudad -</option>
		</select>
	</div>
	<hr>
	<div>
		<label for="nuevaCiudad">Ciudad a insertar</label>
		<input type="text" name="nuevaCiudad" id="nuevaCiudad">
		<input type="button" id="btn_insertar" value="Insertar">
	</div>
</form><?php }
}

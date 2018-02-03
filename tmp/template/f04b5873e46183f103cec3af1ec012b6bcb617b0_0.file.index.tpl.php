<?php
/* Smarty version 3.1.30, created on 2018-02-03 03:50:19
  from "C:\xampp\htdocs\Framework-PHP\views\paginacion\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a75236b5df6d9_07961281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f04b5873e46183f103cec3af1ec012b6bcb617b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\paginacion\\index.tpl',
      1 => 1517626217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a75236b5df6d9_07961281 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="card">
	<div class="card-body">
			<div  class="form-row align-items-center">
				<label class="col" for="nombre">Nombre</label>
				<div class="col-8">
					<input id="nombre" type="text" name="nombre" class="form-control">
				</div>
				<div class="col">
					<input id="btnEnviar" class="btn btn-success" type="submit" value="Enviar">
				</div>
			</div><br/>
			<div class="form-row d-flex justify-content-center">
				<div class="col-auto">
					<select class="form-control" name="pais" id="pais">
						<option value="0"> Seleccione un país </option>
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
				</div>
				<div class="col-auto">
					<select class="form-control" name="ciudad" id="ciudad">
						<option value="0"> Seleccione una ciudad </option>
					</select>
				</div>
			</div>
	</div>
</div>
<div id="lista_registros">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>País</th>
				<th>Ciudad</th>
			</tr>
		</thead>
		<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datos']->value, 'dato');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->value) {
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['pais'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['ciudad'];?>
</td>
			</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</tbody>
	</table>
	<?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion']->value)===null||$tmp==='' ? '' : $tmp);?>

</div><?php }
}

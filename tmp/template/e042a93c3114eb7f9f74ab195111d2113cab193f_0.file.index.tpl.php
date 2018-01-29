<?php
/* Smarty version 3.1.30, created on 2018-01-29 14:39:31
  from "C:\xampp\htdocs\Framework-PHP\views\post\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6f24139437e6_53771176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e042a93c3114eb7f9f74ab195111d2113cab193f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\views\\post\\index.tpl',
      1 => 1517233158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6f24139437e6_53771176 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Últimos Posts</h2>

<?php if ((isset($_smarty_tpl->tpl_vars['posts']->value) && count($_smarty_tpl->tpl_vars['posts']->value))) {?>

	<table border="1">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['post']->value['titulo'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['post']->value['cuerpo'];?>
</td>
				<td>
					<?php if (isset($_smarty_tpl->tpl_vars['post']->value['imagen'])) {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/post/<?php echo $_smarty_tpl->tpl_vars['post']->value['imagen'];?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/post/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['post']->value['imagen'];?>
">
					</a>
					<?php }?>
				</td>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/editar/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">Editar</a></td>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/eliminar/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">Eliminar</a></td>
			</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</table>

<?php } else { ?>
	<p><strong>No hay Posts...</strong></p>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['paginacion']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['paginacion']->value;?>
 <?php }?>

<?php if ((Session::accesoViewEstricto(array('usuario')))) {?>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/nuevo">Agregar Post</a></p>
<?php }
}
}

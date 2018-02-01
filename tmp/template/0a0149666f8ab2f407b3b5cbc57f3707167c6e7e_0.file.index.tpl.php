<?php
/* Smarty version 3.1.30, created on 2018-02-01 19:15:34
  from "C:\xampp\htdocs\Framework-PHP\modules\usuarios\views\login\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a735946e36af5_38062441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a0149666f8ab2f407b3b5cbc57f3707167c6e7e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Framework-PHP\\modules\\usuarios\\views\\login\\index.tpl',
      1 => 1517508932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a735946e36af5_38062441 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row justify-content-center">
  <div class="col-6">
    <h2 class="text-center">Iniciar Sesión</h2>

    <form name="form" method="post">
     <input type="hidden" name="enviar" value="1">
     <div class="form-group">
      <label for="usuario">Usuario</label>
      <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Ingrese el usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
">
    </div>
    <div class="form-group">
      <label for="password">Contraseña</label>
      <input type="password" class="form-control" name="pass" id="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>
</div>
<?php }
}

<?php
/* Smarty version 3.1.32, created on 2018-05-18 17:47:15
  from '/var/www/html/ecommerce/view/compra_finalizada.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5aff3bd343f639_05588565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1007f25ddd9d2a9b99fab8f1cd5feb22b408c4d3' => 
    array (
      0 => '/var/www/html/ecommerce/view/compra_finalizada.tpl',
      1 => 1526676398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aff3bd343f639_05588565 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="align-content-center text-center">
    <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;
echo $_smarty_tpl->tpl_vars['imagem']->value;?>
" width="100px" height="" alt="">
    <p class="mensagem-final"><?php echo $_smarty_tpl->tpl_vars['email_mensagem']->value;?>
</p>
</div><?php }
}

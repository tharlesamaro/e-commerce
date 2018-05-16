<?php
/* Smarty version 3.1.32, created on 2018-05-15 21:13:28
  from '/var/www/html/ecommerce/view/produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5afb77a89f4e19_83341201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a024eb2822700babd5477a286d7109a8ee7cf120' => 
    array (
      0 => '/var/www/html/ecommerce/view/produtos.tpl',
      1 => 1526429605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afb77a89f4e19_83341201 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row text-center">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
                <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
</h4>
                <p class="card-text">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_preco'];?>
</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Ver produto!</a>
            </div>
        </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}

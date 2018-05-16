<?php
/* Smarty version 3.1.32, created on 2018-05-16 12:27:46
  from '/var/www/html/ecommerce/view/produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5afc4df256ab94_85654166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a024eb2822700babd5477a286d7109a8ee7cf120' => 
    array (
      0 => '/var/www/html/ecommerce/view/produtos.tpl',
      1 => 1526484462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afc4df256ab94_85654166 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row text-center">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produtos']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['p']->value['prod_nome'];?>
</h4>
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value['prod_promocao'];
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['p']->value['prod_data_inicial_promocao'];
$_prefixVariable2 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['p']->value['prod_data_final_promocao'];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable1 == 's' && $_prefixVariable2 <= date('Y-m-d') && $_prefixVariable3 >= date('Y-m-d')) {?>
                        <p class="text-danger card-text" id="preco">
                            <del>R$ <?php echo $_smarty_tpl->tpl_vars['p']->value['prod_preco'];?>
</del>
                        </p>
                        <p class="text-success card-text">R$ <?php echo $_smarty_tpl->tpl_vars['p']->value['prod_preco_promocao'];?>
</p>
                    <?php } else { ?>
                        <p class="card-text text-success">R$ <?php echo $_smarty_tpl->tpl_vars['p']->value['prod_preco'];?>
</p>
                    <?php }?>
                </div>
                <div class="card-footer">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['produto']->value;
echo $_smarty_tpl->tpl_vars['p']->value['prod_id'];?>
" class="btn btn-primary"><i class="fa fa-eye"></i> Ver produto!</a>
                </div>
            </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}

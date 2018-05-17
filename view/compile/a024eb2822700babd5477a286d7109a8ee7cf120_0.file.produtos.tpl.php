<?php
/* Smarty version 3.1.32, created on 2018-05-17 14:21:04
  from '/var/www/html/ecommerce/view/produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5afdba0077e768_45440875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a024eb2822700babd5477a286d7109a8ee7cf120' => 
    array (
      0 => '/var/www/html/ecommerce/view/produtos.tpl',
      1 => 1526577311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afdba0077e768_45440875 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row text-center">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produtos']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['base_url_img']->value;
echo $_smarty_tpl->tpl_vars['p']->value['prod_imagem'];?>
" alt="">
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
" class="btn btn-primary"><i class="fa fa-eye"></i> Ver
                        produto!</a>
                </div>
            </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['pagina_anterior']->value;?>
" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['numero_de_paginas']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['numero_de_paginas']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 0, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
            <li class="page-item"><a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['url_paginacao']->value;
echo $_smarty_tpl->tpl_vars['foo']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value+1;?>
</a></li>
        <?php }
}
?>
        <li class="page-item">
            <a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['pagina_posterior']->value;?>
" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>
</nav>

<?php }
}

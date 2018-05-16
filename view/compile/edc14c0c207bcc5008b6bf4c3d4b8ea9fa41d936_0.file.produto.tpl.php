<?php
/* Smarty version 3.1.32, created on 2018-05-16 13:40:41
  from '/var/www/html/ecommerce/view/produto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5afc5f09044397_64322074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edc14c0c207bcc5008b6bf4c3d4b8ea9fa41d936' => 
    array (
      0 => '/var/www/html/ecommerce/view/produto.tpl',
      1 => 1526486972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afc5f09044397_64322074 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-lg-3">
        <h1 class="my-4">Calcular Frete</h1>
        <div class="list-group">

        </div>
    </div>
    <div class="col-lg-9">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produto']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
            <div class="card-produto-info card mt-4">
                <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
                <div class="card-body">
                    <h3 class="card-title"><?php echo $_smarty_tpl->tpl_vars['p']->value['prod_nome'];?>
</h3>
                    <h4>R$ <?php echo $_smarty_tpl->tpl_vars['p']->value['prod_preco'];?>
</h4>
                    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['p']->value['prod_descricao'];?>
</p>
                    <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                    5.0 estrelas
                </div>
            </div>
            <!-- /.card -->
            <div class="card-produto-info card card-outline-secondary my-4">
                <div class="card-header">
                    Outras Informações:
                </div>
                <div class="card-produto-info card-body">
                    <p>Altura: <?php echo $_smarty_tpl->tpl_vars['p']->value['prod_altura'];?>
 cm</p>
                    <hr>
                    <p>Largura: <?php echo $_smarty_tpl->tpl_vars['p']->value['prod_largura'];?>
 cm</p>
                    <hr>
                    <p>Comprimento: <?php echo $_smarty_tpl->tpl_vars['p']->value['prod_comprimento'];?>
 cm</p>
                    <hr>
                    <p>Peso: <?php echo $_smarty_tpl->tpl_vars['p']->value['prod_peso'];?>
 Kg</p>
                    <hr>
                </div>
            </div>

            <a href="#" class="produto-info-footer btn btn-success"><i class="fa fa-shopping-cart"></i> Comprar</a>
            <br>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php }
}

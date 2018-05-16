<?php
/* Smarty version 3.1.32, created on 2018-05-16 02:40:55
  from '/var/www/html/ecommerce/view/produto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5afbc4672cf090_20670411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edc14c0c207bcc5008b6bf4c3d4b8ea9fa41d936' => 
    array (
      0 => '/var/www/html/ecommerce/view/produto.tpl',
      1 => 1526449243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afbc4672cf090_20670411 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">

    <div class="col-lg-3">
        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
            <a href="#" class="list-group-item active">Category 1</a>
            <a href="#" class="list-group-item">Category 2</a>
            <a href="#" class="list-group-item">Category 3</a>
        </div>
    </div>
    <!-- /.col-lg-3 -->

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUTO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
    <div class="col-lg-9">

        <div class="card mt-4">
            <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
            <div class="card-body">
                <h3 class="card-title"><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
</h3>
                <h4>$24.99</h4>
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_descricao'];?>
</p>
                <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                4.0 stars
            </div>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col-lg-9 -->
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div><?php }
}

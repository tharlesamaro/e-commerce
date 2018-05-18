<?php
/* Smarty version 3.1.32, created on 2018-05-18 12:27:14
  from '/var/www/html/ecommerce/view/produto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5afef0d2c33d71_21320894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edc14c0c207bcc5008b6bf4c3d4b8ea9fa41d936' => 
    array (
      0 => '/var/www/html/ecommerce/view/produto.tpl',
      1 => 1526657224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afef0d2c33d71_21320894 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produto']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
        <div class="col-lg-3">
            <div class="row">
                <img class="img-caminhao-frete img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['base_url_img_root']->value;?>
caminhao.svg" width="15%" height=""
                     alt="">
                <h3 class="my-4">Calcular Frete</h3>
            </div>
            <div class="list-group">
                <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/produto/<?php echo $_smarty_tpl->tpl_vars['p']->value['pro_id'];?>
" method="post">
                    <div class="form-group">
                        <input class="form-control" type="text" id="cep_destino" name="cep_destino" maxlength="8"
                               minlength="8"
                               placeholder="Ex: 60000000"
                               required>
                    </div>
                                        <input type="text" id="prod_peso" name="prod_peso" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['prod_peso'];?>
" hidden>
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
                        <input type="text" id="prod_preco" name="prod_preco" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['prod_preco_promocao'];?>
" hidden>
                    <?php } else { ?>
                        <input type="text" id="prod_preco" name="prod_preco" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['prod_preco'];?>
" hidden>
                    <?php }?>
                    <input type="text" id="prod_altura" name="prod_altura" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['prod_altura'];?>
" hidden>
                    <input type="text" id="prod_comprimento" name="prod_comprimento" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['prod_comprimento'];?>
"
                           hidden>
                    <input type="text" id="prod_largura" name="prod_largura" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['prod_largura'];?>
" hidden>
                    <input type="text" id="prod_id" name="prod_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['prod_id'];?>
" hidden>
                                        <button class="btn btn-success form-control" type="submit"><i class="fa fa-calculator"></i> Calcular
                    </button>
                </form>
            </div>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['mostrar_calculo_frete']->value;
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 == 1) {?>
                <div class="frete-resultado">
                    <ul class="list-group">
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['frete_codigo_erro']->value;
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5 == 0) {?>
                            <li class="list-inline-item">Frete: R$ <?php echo $_smarty_tpl->tpl_vars['frete_valor']->value;?>
</li>
                            <li class="list-inline-item">Entrega: <?php echo $_smarty_tpl->tpl_vars['frete_prazo']->value;?>
 dias úteis</li>
                        <?php } else { ?>
                            <li class="list-group-item-danger">Erro: <?php echo $_smarty_tpl->tpl_vars['frete_mensagem_erro']->value;?>
</li>
                        <?php }?>
                    </ul>
                </div>
            <?php }?>
        </div>
        <div class="col-lg-9">
            <div class="card-produto-info card mt-4">
                <img class="card-img-top img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['base_url_img']->value;
echo $_smarty_tpl->tpl_vars['p']->value['prod_imagem'];?>
" alt="">
                <div class="card-body">
                    <h3 class="card-title"><?php echo strtoupper($_smarty_tpl->tpl_vars['p']->value['prod_nome']);?>
</h3>
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value['prod_promocao'];
$_prefixVariable6 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['p']->value['prod_data_inicial_promocao'];
$_prefixVariable7 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['p']->value['prod_data_final_promocao'];
$_prefixVariable8 = ob_get_clean();
if ($_prefixVariable6 == 's' && $_prefixVariable7 <= date('Y-m-d') && $_prefixVariable8 >= date('Y-m-d')) {?>
                        <h4 class="text-danger card-text" id="preco">
                            <del>R$ <?php echo $_smarty_tpl->tpl_vars['p']->value['prod_preco'];?>
</del>
                        </h4>
                        <h4 class="text-success card-text">R$ <?php echo $_smarty_tpl->tpl_vars['p']->value['prod_preco_promocao'];?>
</h4>
                    <?php } else { ?>
                        <h4 class="card-text text-success">R$ <?php echo $_smarty_tpl->tpl_vars['p']->value['prod_preco'];?>
</h4>
                    <?php }?>
                                        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['p']->value['prod_descricao'];?>
</p>
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
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}

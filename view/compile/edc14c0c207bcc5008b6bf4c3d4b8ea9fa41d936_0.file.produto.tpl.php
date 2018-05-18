<?php
/* Smarty version 3.1.32, created on 2018-05-18 20:21:04
  from '/var/www/html/ecommerce/view/produto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5aff5fe01e1ef5_89108083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edc14c0c207bcc5008b6bf4c3d4b8ea9fa41d936' => 
    array (
      0 => '/var/www/html/ecommerce/view/produto.tpl',
      1 => 1526682397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aff5fe01e1ef5_89108083 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <label for="cep_destino">CEP:</label>
                        <input class="form-control" type="text" id="cep_destino" name="cep_destino" maxlength="8"
                               minlength="8"
                               placeholder="Ex: 60000000"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="tipo_de_frete">Tipo de frete:</label>
                        <select class="form-control" name="tipo_de_frete" id="tipo_de_frete" required>
                            <option selected value="40010">SEDEX</option>
                            <option value="41106">PAC</option>
                        </select>
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
                            <li class="list-inline-item">Valor do frete: R$ <?php echo $_smarty_tpl->tpl_vars['frete_valor']->value;?>
</li>
                            <li class="list-inline-item">Entrega: <?php echo $_smarty_tpl->tpl_vars['frete_prazo']->value;?>
 dias úteis</li>
                            <li class="list-inline-item">Frete escolhido: <?php echo $_smarty_tpl->tpl_vars['tipo_de_frete']->value;?>
</li>
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

            <?php ob_start();
echo $_smarty_tpl->tpl_vars['mostrar_calculo_frete']->value;
$_prefixVariable9 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['frete_codigo_erro']->value;
$_prefixVariable10 = ob_get_clean();
if ($_prefixVariable9 == 1 && $_prefixVariable10 == 0) {?>
                <div class="card-produto-info card card-outline-secondary my-4">
                    <div class="card-header">
                        Informações da compra:
                    </div>
                    <div class="card-produto-info card-body">
                        <p>Valor total da compra: R$ <?php echo $_smarty_tpl->tpl_vars['valor_total_produto']->value;?>
</p>
                        <hr>
                        <p>Prazo para entrega: <?php echo $_smarty_tpl->tpl_vars['frete_prazo']->value;?>
 dias úteis</p>
                        <hr>
                    </div>
                </div>
            <?php }?>

                        <button type="button" class="produto-info-footer btn btn-success" data-toggle="modal"
                    data-target="#modalCompra"><i
                        class="fa fa-shopping-cart"></i> Comprar
            </button>
            <br>

            <?php ob_start();
echo $_smarty_tpl->tpl_vars['mostrar_calculo_frete']->value;
$_prefixVariable11 = ob_get_clean();
if ($_prefixVariable11 == 1) {?>
                                <div class="modal fade" id="modalCompra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Conclusão de compra</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/compra" method="post">
                                    <div class="form-group">
                                        <label for="nome">Nome:</label>
                                        <input class="form-control" type="text" id="nome" name="nome" minlength="5"
                                               maxlength="100" placeholder="Nome completo" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-mail:</label>
                                        <input class="form-control" type="email" id="email" name="email"
                                               placeholder="Ex: email@dominio.com" required>
                                    </div>
                                                                        <input type="hidden" id="prod_nome" name="prod_nome" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['prod_nome'];?>
" hidden>
                                    <input type="hidden" id="valor_total" name="valor_total"
                                           value="<?php echo $_smarty_tpl->tpl_vars['valor_total_produto']->value;?>
" hidden>
                                    <input type="hidden" id="cep_destino" name="cep_destino" value="<?php echo $_smarty_tpl->tpl_vars['cep_destino']->value;?>
"
                                           hidden>
                                                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                                                    class="fa fa-window-close"></i> Cancelar
                                        </button>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-credit-card"></i>
                                            Comprar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                                <div class="modal" id="modalCompra" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"><i class="fa fa-exclamation-circle"></i> IMPORTANTE</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Por favor! Calcule o frete antes de finalizar sua compra!</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
                            <?php }?>
        </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}

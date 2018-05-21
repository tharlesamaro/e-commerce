<?php
/* Smarty version 3.1.32, created on 2018-05-21 12:08:41
  from '/var/www/html/ecommerce/view/editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b02e0f97133f0_62247676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c175b6f38615526e1a79fcb122d9d0e1ccb4bcb4' => 
    array (
      0 => '/var/www/html/ecommerce/view/editar.tpl',
      1 => 1526915304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b02e0f97133f0_62247676 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <h3 class="text-center">Edição de produto</h3>
    <hr>
    <p>Atenção! Campos com <b class="text-danger">*</b> são obrigatórios.</p>
    <hr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produto']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['editar']->value;
echo $_smarty_tpl->tpl_vars['p']->value['prod_id'];?>
" method="post" enctype="multipart/form-data" id="formCadastroProdutos">
                        <div class="form-group">
                <label for="nome">Nome: <b class="text-danger">*</b></label>
                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['prod_nome'];?>
" id="nome" name="nome"
                       placeholder="Nome do produto"
                       minlength="5"
                       maxlength="50" autofocus required>
            </div>
            
                        <div class="form-group">
                <label for="preco">Preço: <b class="text-danger">*</b></label>
                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['prod_preco'];?>
" id="preco" name="preco" minlength="4"
                       maxlength="8"
                       placeholder="0.00" required>
            </div>
            
                        <div class="form-group">
                <label for="descricao">Descrição: <b class="text-danger">*</b></label>
                <textarea type="text" class="form-control" id="descricao" name="descricao"
                          placeholder="Descrição do produto" maxlength="255" minlength="10"
                          required><?php echo $_smarty_tpl->tpl_vars['p']->value['prod_descricao'];?>
</textarea>
            </div>
            
                        <div class="form-group">
                <label for="promocao">Promoção:</label>
                <select class="form-control" id="promocao" name="promocao">
                    <?php if ($_smarty_tpl->tpl_vars['p']->value['prod_promocao'] == 'n') {?>
                        <option value="n" selected>Não</option>
                        <option value="s">Sim</option>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['p']->value['prod_promocao'] == 's') {?>
                        <option value="n">Não</option>
                        <option value="s" selected>Sim</option>
                    <?php }?>
                </select>
            </div>
            
                        <div class="form-group">
                <label for="preco_promocao">Preço promocional:</label>
                <?php if ($_smarty_tpl->tpl_vars['p']->value['prod_promocao'] == 'n') {?>
                    <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['prod_preco_promocao'];?>
" id="preco_promocao"
                           name="preco_promocao" minlength="4"
                           maxlength="8" placeholder="0.00" disabled>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['p']->value['prod_promocao'] == 's') {?>
                    <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['prod_preco_promocao'];?>
" id="preco_promocao"
                           name="preco_promocao" minlength="4"
                           maxlength="8" placeholder="0.00">
                <?php }?>
            </div>
            
                        <div class="form-group">
                <label for="data_inicio_promocao">Início da promoção:</label>
                <?php if ($_smarty_tpl->tpl_vars['p']->value['prod_promocao'] == 'n') {?>
                    <input type="text" class="form-control"
                           value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value['prod_data_inicial_promocao'];
$_prefixVariable1 = ob_get_clean();
echo implode("/",array_reverse(explode("-",$_prefixVariable1)));?>
"
                           id="data_inicio_promocao" name="data_inicio_promocao" disabled>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['p']->value['prod_promocao'] == 's') {?>
                    <input type="text" class="form-control"
                           value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value['prod_data_inicial_promocao'];
$_prefixVariable2 = ob_get_clean();
echo implode("/",array_reverse(explode("-",$_prefixVariable2)));?>
"
                           id="data_inicio_promocao" name="data_inicio_promocao">
                <?php }?>
            </div>
            
                        <div class="form-group">
                <label for="data_final_promocao">Fim da promoção:</label>
                <?php if ($_smarty_tpl->tpl_vars['p']->value['prod_promocao'] == 'n') {?>
                    <input type="text" class="form-control"
                           value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value['prod_data_final_promocao'];
$_prefixVariable3 = ob_get_clean();
echo implode("/",array_reverse(explode("-",$_prefixVariable3)));?>
"
                           id="data_final_promocao" name="data_final_promocao" disabled>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['p']->value['prod_promocao'] == 's') {?>
                    <input type="text" class="form-control"
                           value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value['prod_data_final_promocao'];
$_prefixVariable4 = ob_get_clean();
echo implode("/",array_reverse(explode("-",$_prefixVariable4)));?>
"
                           id="data_final_promocao" name="data_final_promocao">
                <?php }?>
            </div>
            
                        <div class="form-group">
                <label for="peso">Peso: <b class="text-danger">*</b></label>
                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['prod_peso'];?>
" id="peso" name="peso" minlength="3"
                       maxlength="3"
                       placeholder="00.0" required>
            </div>
            
                        <div class="form-group">
                <label for="altura">Altura: <b class="text-danger">*</b></label>
                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['prod_altura'];?>
" id="altura" name="altura" minlength="3"
                       maxlength="3"
                       placeholder="00.0" required>
            </div>
            
                        <div class=" form-group">
                <label for="comprimento">Comprimento: <b class="text-danger">*</b></label>
                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['prod_comprimento'];?>
" id="comprimento"
                       name="comprimento" minlength="3" maxlength="3"
                       placeholder="00.0" required>
            </div>
            
                        <div class="form-group">
                <label for="largura">Largura: <b class="text-danger">*</b></label>
                <input type="largura" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['prod_largura'];?>
" id="largura" name="largura"
                       minlength="3" maxlength="3"
                       placeholder="00.0" required>
            </div>
            
                        <div class="form-group">
                <label for="imagem">Imagem (940x400):</label>
                <input type="file" class="form-control-file" id="form_edit_imagem" name="form_edit_imagem"
                       aria-describedby="fileHelp">
            </div>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['prod_imagem'];?>
" id="form_edit_imagem_hidden" name="form_edit_imagem_hidden"
                   hidden>
                        <hr>
                        <div class="form-row">
                <div class="form-group">
                    <button type="submit" class="botao-cadastro btn btn-success">Salvar</button>
                </div>
                <div class="form-group">
                    <button type="reset" class="botao-cadastro btn btn-danger form-control">Cancelar</button>
                </div>
            </div>
                    </form>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}

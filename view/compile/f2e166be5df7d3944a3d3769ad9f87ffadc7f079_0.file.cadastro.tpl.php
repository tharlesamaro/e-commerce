<?php
/* Smarty version 3.1.32, created on 2018-05-21 02:16:01
  from '/var/www/html/ecommerce/view/cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b025611d1a233_04433546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2e166be5df7d3944a3d3769ad9f87ffadc7f079' => 
    array (
      0 => '/var/www/html/ecommerce/view/cadastro.tpl',
      1 => 1526879490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b025611d1a233_04433546 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
        <?php if ($_SESSION['cadastro_sucesso']) {?>
        <p class="alert-success text-center">Produto cadastrado com sucesso!</p>
    <?php }?>
    <?php if ($_SESSION['cadastro_erro']) {?>
        <p class="alert-danger text-center">Erro ao cadastrar o produto!.</p>
    <?php }?>
    
    <h3 class="text-center">Cadastro de produto</h3>
    <hr>
    <p>Atenção! Campos com <b class="text-danger">*</b> são obrigatórios.</p>
    <hr>
        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/cadastro" method="post" enctype="multipart/form-data" id="formCadastroProdutos">
                <div class="form-group">
            <label for="nome">Nome: <b class="text-danger">*</b></label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do produto"
                   minlength="5"
                   maxlength="50" autofocus required>
        </div>
        
                <div class="form-group">
            <label for="preco">Preço: <b class="text-danger">*</b></label>
            <input type="text" class="form-control" id="preco" name="preco" minlength="4" maxlength="8"
                   placeholder="0.00" required>
        </div>
        
                <div class="form-group">
            <label for="descricao">Descrição: <b class="text-danger">*</b></label>
            <textarea type="text" class="form-control" id="descricao" name="descricao"
                      placeholder="Descrição do produto" maxlength="255" minlength="10" required></textarea>
        </div>
        
                <div class="form-group">
            <label for="promocao">Promoção:</label>
            <select class="form-control" id="promocao" name="promocao">
                <option value="n" selected>Não</option>
                <option value="s">Sim</option>
            </select>
        </div>
        
                <div class="form-group">
            <label for="preco_promocao">Preço promocional:</label>
            <input type="text" class="form-control" id="preco_promocao" name="preco_promocao" minlength="4"
                   maxlength="8" placeholder="0.00" disabled>
        </div>
        
                <div class="form-group">
            <label for="data_inicio_promocao">Início da promoção:</label>
            <input type="text" class="form-control" id="data_inicio_promocao" name="data_inicio_promocao" disabled>
        </div>
        
                <div class="form-group">
            <label for="data_final_promocao">Fim da promoção:</label>
            <input type="text" class="form-control" id="data_final_promocao" name="data_final_promocao" disabled>
        </div>
        
                <div class="form-group">
            <label for="peso">Peso: <b class="text-danger">*</b></label>
            <input type="text" class="form-control" id="peso" name="peso" minlength="3" maxlength="3"
                   placeholder="00.0" required>
        </div>
        
                <div class="form-group">
            <label for="altura">Altura: <b class="text-danger">*</b></label>
            <input type="text" class="form-control" id="altura" name="altura" minlength="3" maxlength="3"
                   placeholder="00.0" required>
        </div>
        
                <div class=" form-group">
            <label for="comprimento">Comprimento: <b class="text-danger">*</b></label>
            <input type="text" class="form-control" id="comprimento" name="comprimento" minlength="3" maxlength="3"
                   placeholder="00.0" required>
        </div>
        
                <div class="form-group">
            <label for="largura">Largura: <b class="text-danger">*</b></label>
            <input type="largura" class="form-control" id="largura" name="largura" minlength="3" maxlength="3"
                   placeholder="00.0" required>
        </div>
        
                <div class="form-group">
            <label for="imagem">Imagem (940x400): <b class="text-danger">*</b></label>
            <input type="file" class="form-control-file" id="imagem" name="imagem" aria-describedby="fileHelp"
                   required>
        </div>
                <hr>
                <div class="form-row">
            <div class="form-group">
                <button type="submit" class="botao-cadastro btn btn-success">Cadastrar</button>
            </div>
            <div class="form-group">
                <button type="reset" class="botao-cadastro btn btn-danger form-control">Limpar</button>
            </div>
        </div>
            </form>
    </div>
<?php }
}

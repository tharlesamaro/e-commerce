<?php
/* Smarty version 3.1.32, created on 2018-05-19 14:57:21
  from '/var/www/html/ecommerce/view/cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0065819ca076_65430775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2e166be5df7d3944a3d3769ad9f87ffadc7f079' => 
    array (
      0 => '/var/www/html/ecommerce/view/cadastro.tpl',
      1 => 1526752547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0065819ca076_65430775 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
        <?php if ($_SESSION['sucesso']) {?>
        <div><p class="alert-success text-center">Produto cadastrado com sucesso!</p></div>
    <?php }?>
    <?php if ($_SESSION['erro']) {?>
        <div><p class="alert-danger text-center">Erro ao cadastrar o produto!.</p>
    <?php }?>
    
    <p>Atenção! Campos com <b class="text-danger">*</b> são obrigatórios.</p>
    <hr>
    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/cadastro/" method="post" enctype="multipart/form-data">
                <div class="form-group">
            <label for="nome">Nome: <b class="text-danger">*</b></label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do produto"
                   minlength="5"
                   maxlength="50" autofocus required>
        </div>
        
                <div class="form-group">
            <label for="preco">Preço: <b class="text-danger">*</b></label>
            <input type="text" class="form-control" id="preco" name="preco" placeholder="" required>
        </div>
        
                <div class="form-group">
            <label for="descricao">Descrição: <b class="text-danger">*</b></label>
            <textarea type="text" class="form-control" id="descricao" name="descricao"
                      placeholder="Descrição do produto" maxlength="255" minlength="5" required></textarea>
        </div>
        
                <div class="form-group">
            <label for="promocao">Promoção:</label>
            <select class="form-control" id="promocao" name="promocao">
                <option value="n" selected>Não</option>
                <option value="s">Sim</option>
            </select>
        </div>
        
                <div class="form-group">
            <label for="preco_promocao">Valor promocional:</label>
            <input type="text" class="form-control" id="preco_promocao" name="preco_promocao">
        </div>
        
                <div class="form-group">
            <label for="data_inicio_promocao">Início da promoção:</label>
            <input type="text" class="form-control" id="data_inicio_promocao" name="data_inicio promocao">
        </div>
        
                <div class="form-group">
            <label for="data_final_promocao">Fim da promoção:</label>
            <input type="text" class="form-control" id="data_final_promocao" name="data_final_promocao">
        </div>
        
                <div class="form-group">
            <label for="peso">Peso: <b class="text-danger">*</b></label>
            <input type="text" class="form-control" id="peso" name="peso" placeholder="" required>
        </div>
        
                <div class="form-group">
            <label for="altura">Altura</label>
            <input type="text" class="form-control" id="altura" name="altura" placeholder="">
        </div>
        
                <div class="form-group">
            <label for="comprimento">Comprimento:</label>
            <input type="text" class="form-control" id="comprimento" name="comprimento" placeholder="">
        </div>
        
                <div class="form-group">
            <label for="largura">Largura:</label>
            <input type="largura" class="form-control" id="largura" name="largura" placeholder="">
        </div>
        
                <div class="form-group">
            <label for="imagem">Imagem (recomendado 940x400): <b class="text-danger">*</b></label>
            <input type="file" class="form-control-file" id="imagem" name="imagem" aria-describedby="fileHelp" required>
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

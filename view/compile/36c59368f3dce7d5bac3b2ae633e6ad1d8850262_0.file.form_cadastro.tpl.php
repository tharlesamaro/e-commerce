<?php
/* Smarty version 3.1.32, created on 2018-05-15 16:04:51
  from '/var/www/html/ecommerce/view/form_cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5afb2f5306f746_08719793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36c59368f3dce7d5bac3b2ae633e6ad1d8850262' => 
    array (
      0 => '/var/www/html/ecommerce/view/form_cadastro.tpl',
      1 => 1526411082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afb2f5306f746_08719793 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="" action="#" method="post">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" autofocus tabindex="1"
               placeholder="Nome do produto" required>
    </div>

    <div class="form-group">
        <label for="preco">Preço:</label>
        <input type="text" class="form-control" id="preco" data-thousands="." data-decimal="," data-prefix="R$ " name="preco" tabindex="2" placeholder="Preço em R$"
               required>
    </div>
    <div class="form-group">
        <label for="altura">Altura:</label>
        <input type="number" class="form-control" id="altura" name="altura" placeholder="Altura em cm" tabindex="3">
    </div>
    <div class="form-group">
        <label for="peso">Peso:</label>
        <input type="number" class="form-control" id="peso" name="peso" placeholder="Peso em Kg" tabindex="4">
    </div>
    <div class="form-group">
        <label for="comprimento">Comprimento:</label>
        <input type="number" class="form-control" id="comprimento" name="comprimento" placeholder="Comprimento em cm"
               tabindex="5">
    </div>
    <div class="form-group">
        <label for="largura">Largura:</label>
        <input type="number" class="form-control" id="largura" name="largura" placeholder="Largura em cm" tabindex="5">
    </div>
    <div class="form-group">
        <label for="promocao">Promoção:</label>
        <select class="form-control custom-select" id="promocao" name="promocao" tabindex="6">
            <option class="form-control" value="n" selected>Não</option>
            <option class="form-control" value="s">Sim</option>
        </select>
    </div>
    <div class="form-group">
        <label for="precopromocional">Preço Promo:</label>
        <input type="text" class="form-control" id="precopromocional" data-thousands="." data-decimal="," data-prefix="R$ " name="precopromocional" tabindex="2" placeholder="Preço em R$"
               required>
    </div>
    <div class="form-group">
        <label for="data_inicial">Data inicial</label>
        <input type="text" class="form-control" id="data_inicial" name="data_inicial" tabindex="" required>
    </div>
    <div class="form-group">
        <label for="data_final">Data final</label>
        <input type="text" class="form-control" id="data_final" name="data_final" tabindex="" required>
    </div>
    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea class="form-control" id="descricao" name="descricao" tabindex="7" maxlength="255"
                  placeholder="Dsecrição do produto" required></textarea>
    </div>
    <div class="row">
        <div class="form-group col-4">
            <button class="btn btn-primary form-control" type="submit" tabindex="8">Cadastrar</button>
        </div>
        <div class="form-group col-4">
            <button class="btn btn-danger form-control" type="button" tabindex="9">Limpar</button>
        </div>
        <div class="form-group col-4">
            <a class="btn btn-danger form-control" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" tabindex="10">Cancelar</a>
        </div>
    </div>
</form>
<?php }
}

<?php
/* Smarty version 3.1.32, created on 2018-05-19 10:53:02
  from '/var/www/html/ecommerce/view/cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b002c3e2c7d18_50517326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2e166be5df7d3944a3d3769ad9f87ffadc7f079' => 
    array (
      0 => '/var/www/html/ecommerce/view/cadastro.tpl',
      1 => 1526737980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b002c3e2c7d18_50517326 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <form action="#" method="post">
        <fieldset>
                        <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do produto" minlength="5"
                       maxlength="50" required>
            </div>
            <div class="form-group">
                <label for="preco">Preço:</label>
                <input type="text" class="form-control" id="preco" name="preco" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição do produto" maxlength="255" minlength="5" required></textarea>
            </div>
            <div class="form-group">
                <intput type="text" class="form-control" id="" name="" placeholder="" required>
            </div>
            <div class="form-group">
                <intput type="text" class="form-control" id="" name="" placeholder="" required>
            </div>
            <div class="form-group">
                <intput type="text" class="form-control" id="" name="" placeholder="" required>
            </div>
            <div class="form-group">
                <intput type="text" class="form-control" id="" name="" placeholder="" required>
            </div>
            <div class="form-group">
                <intput type="text" class="form-control" id="" name="" placeholder="" required>
            </div>
            <div class="form-group">
                <intput type="text" class="form-control" id="" name="" placeholder="" required>
            </div>
            <button class="btn btn-primary">Cadastrar</button>
        </fieldset>

    </form>
</div>
<?php }
}

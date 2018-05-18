jQuery(function ($) {
    $("#data_inicial").mask("99/99/9999"); // view/form_cadastro.tpl
    $("#data_final").mask("99/99/9999"); // view/form_cadastro.tpl
    $("#preco").maskMoney(); // view/form_cadastro.tpl
    $("#precopromocional").maskMoney(); // view/form_cadastro.tpl
    $("#cep_destino").mask("99999999"); // view/produto.tpl
});
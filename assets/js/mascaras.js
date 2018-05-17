jQuery(function ($) {
    $("#data_inicial").mask("99/99/9999");
    $("#data_final").mask("99/99/9999");
    $("#preco").maskMoney();
    $("#precopromocional").maskMoney();
    $("#frete").mask("99999999"); // view/produto.tpl
});
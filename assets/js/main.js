// máscaras
jQuery(function ($) {
    $("#preco").maskMoney();
    $("#preco_promocao").maskMoney();
    $("#data_inicio_promocao").mask("99/99/9999");
    $("#data_final_promocao").mask("99/99/9999");
    $("#peso").mask("99.999");
    $("#altura").mask("99.99");
    $("#comprimento").mask("99.99");
    $("#largura").mask("99.99");
    $("#cep_destino").mask("99999999");
});

$(document).ready(function () {
    // habilitar a edição da data e preço da promoção se a mesma for selecionada como sim
    $('#promocao').change(function () {
        var tipo = $("#promocao option:selected").text();
        if (tipo == 'Sim') {
            $('#preco_promocao').attr('disabled', false).attr('required', true);
            $('#data_inicio_promocao').attr('disabled', false).attr('required', true);
            $('#data_final_promocao').attr('disabled', false).attr('required', true);
        } else if (tipo == 'Não') {
            $('#preco_promocao').attr('disabled', true).attr('required', false);
            $('#data_inicio_promocao').attr('disabled', true).attr('required', false);
            $('#data_final_promocao').attr('disabled', true).attr('required', false);
        }
    });
    // jquery validation 11.17.0
    $("#formCadastroProdutos").validate({
        // regras de validação
        rules: {
            nome: {
                required: true,
                minlength: 5,
                maxlength: 50
            },
            preco: {
                required: true,
                minlength: 4,
                maxlength: 8

            },
            descricao: {
                required: true,
                minlength: 10,
                maxlength: 255
            },
            preco_promocao: {
                minlength: 4,
                maxlength: 8
            },
            data_inicio_promocao: {
                minlength: 10,
                maxlength: 10
            },
            data_final_promocao: {
                minlength: 10,
                maxlength: 10
            },
            peso: {
                required: true,
                maxlength: 6
            },
            altura: {
                required: true,
                minlength: 1,
                maxlength: 6
            },
            comprimento: {
                required: true,
                minlength: 1,
                maxlength: 6
            },
            largura: {
                required: true,
                minlength: 1,
                maxlength: 6
            },
            imagem: {
                required: true,
                accept: "jpg|png"
            }
        },
        // mensagens de erro
        messages: {
            nome: {
                required: "Nome do produto é obrigatório.",
                minlength: "O campo nome deve ter no mínimo 5 caracteres",
                maxlength: "O campo nome deve ter no máximo de 50 caracteres"
            },
            preco: {
                required: "O campo preço é obrigatório.",
                minlength: "O campo preço deve ter no mínimo 3 dígitos.",
                maxlength: "O valor máximo é R$ 9,999.99."
            },
            descricao: {
                required: "O campo descrição é obrigatorio.",
                minlength: "O campo descrição deve ter no mínimo 10 caracteres.",
                maxlength: "O campo descrição deve ter no máximo 255 caracteres."
            },
            preco_promocao: {
                required: "O campo preço promocional é obrigatório.",
                minlength: "O campo preço deve ter no mínimo 3 dígitos.",
                maxlength: "O valor máximo é R$ 9,999.99."
            },
            data_inicio_promocao: {
                required: "O campo inicio da promoção é obrigatório.",
                minlength: "O campo deve ter pelo menos 8 dígitos"
            },
            data_final_promocao: {
                required: "O campo fim da promoção é obrigatório.",
                minlength: "O campo deve ter pelo menos 8 dígitos"
            },
            peso: {
                required: "O campo peso é obrigatório. Ex: 6.000 KG"
            },
            altura: {
                required: "O campo altura é obrigatório"
            },
            comprimento: {
                required: "O campo comprimento é obrigatório"
            },
            largura: {
                required: "O campo largura é obrigatório"
            },
            imagem: {
                required: "O campo imagem é obrigatório.",
                accept: "Extensão de arquivo inválida."
            }
        }
    });
    // fim jquery validation 11.17.0
});
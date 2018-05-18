<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 16/05/18
 * Time: 01:49
 */

$smarty = new Template();
$produto = new Produtos();

$produto_id = isset($_POST['prod_id']) ? $_POST['prod_id'] : Rotas::$pag[1];

$produto->get_produto_by_id($produto_id);
$smarty->assign('produto', $produto->get_itens());
$smarty->assign('base_url_img', Rotas::get_imagem_produtos_url());
$smarty->assign('base_url_img_root', Rotas::get_imagem_geral_url());
$smarty->assign('base_url', Rotas::get_site_home());

// ***** TESTE CALCULO FRETE *****

//OBS: depois colocar essas variaveis na classe de produto

$mostrar_calculo_frete = 0;

if (isset($_POST['prod_id'])) {
    $cep_destino = $_POST['cep_destino'];
    $prod_peso = $_POST['prod_peso'];
    $prod_preco = $_POST['prod_preco'];
    $prod_altura = $_POST['prod_altura'];
    $prod_comprimento = $_POST['prod_comprimento'];
    $prod_largura = $_POST['prod_largura'];

    $xml_frete = Frete::calcular_frete($cep_destino, $prod_peso, $prod_preco, $prod_altura, $prod_comprimento, $prod_largura);

    $frete = [
        'frete_codigo' => $xml_frete->Codigo,
        'frete_valor' => str_replace(',', '.', $xml_frete->Valor),
        'frete_prazo_entrega' => $xml_frete->PrazoEntrega,
        'frete_valor_mao_propria' => $xml_frete->ValorMaoPropria,
        'frete_valor_valor_aviso_recebimento' => $xml_frete->ValorAvisoRecebimento,
        'frete_valor_valor_declarado' => $xml_frete->ValorValorDeclarado,
        'frete_entrega_domiciliar' => $xml_frete->EntregaDomiciliar,
        'frete_entrega_sabado' => $xml_frete->EntregaSabado,
        'frete_codigo_erro' => $xml_frete->Erro,
        'frete_mensagem_erro' => $xml_frete->MsgErro
    ];

    $valor_total_produto =  $prod_preco + $frete['frete_valor'];

    $smarty->assign('frete_prazo', $frete['frete_prazo_entrega']);
    $smarty->assign('frete_valor', $frete['frete_valor']);
    $smarty->assign('frete_codigo_erro', $frete['frete_codigo_erro']);
    $smarty->assign('frete_mensagem_erro', $frete['frete_mensagem_erro']);
    $smarty->assign('valor_total_produto', $valor_total_produto);

    $mostrar_calculo_frete = 1;

    var_dump($_POST['prod_preco']);
    var_dump($_POST['cep_destino']);
}

$smarty->assign('mostrar_calculo_frete', $mostrar_calculo_frete);
// ***** FIM DO TESTE CALCULO FRETE *****

$smarty->display('produto.tpl');

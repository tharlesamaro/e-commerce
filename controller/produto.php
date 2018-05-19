<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 16/05/18
 * Time: 01:49
 */

$smarty = new Template();
$produto = new Produtos();

# seleciona o produto pelo ID
$produto_id = isset($_POST['prod_id']) ? $_POST['prod_id'] : Rotas::$pag[1];
$produto->get_produto_by_id($produto_id);

# calculo do frete
$mostrar_calculo_frete = 0;

if (isset($_POST['prod_id'])) {
    $cep_destino = $_POST['cliente_cep'];
    $servico = $_POST['tipo_de_frete'];
    $prod_peso = $_POST['prod_peso'];
    $prod_preco = $_POST['prod_preco'];
    $prod_altura = $_POST['prod_altura'];
    $prod_comprimento = $_POST['prod_comprimento'];
    $prod_largura = $_POST['prod_largura'];
    $mostrar_calculo_frete = 1;

    # calcula o frete com o ws dos correios e retorna um xml
    $xml_frete = Frete::calcular_frete($cep_destino, $servico, $prod_peso, $prod_preco, $prod_altura, $prod_comprimento, $prod_largura);

    # guarda d tipo de frete e valor total da compra
    $frete_escolhido = ($_POST['tipo_de_frete'] == 40010) ? 'SEDEX' : 'PAC';
    $valor_total_produto = $prod_preco + str_replace(',', '.', $xml_frete->Valor);

    # assinaturas pro Smarty
    $smarty->assign('frete_prazo', $xml_frete->PrazoEntrega);
    $smarty->assign('frete_valor', $xml_frete->Valor);
    $smarty->assign('frete_codigo_erro', $xml_frete->Erro);
    $smarty->assign('frete_mensagem_erro', $xml_frete->MsgErro);
    $smarty->assign('valor_total_produto', $valor_total_produto);
    $smarty->assign('tipo_de_frete', $frete_escolhido);
    $smarty->assign('cliente_cep', $cep_destino);
}

# assinaturas pro Smarty
$smarty->assign('produto', $produto->get_itens());
$smarty->assign('base_url_img', Rotas::get_imagem_produtos_url());
$smarty->assign('base_url_img_root', Rotas::get_imagem_geral_url());
$smarty->assign('base_url', Rotas::get_site_home());
$smarty->assign('mostrar_calculo_frete', $mostrar_calculo_frete);

$smarty->display('produto.tpl');

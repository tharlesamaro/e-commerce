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
$cep_destino = null;
$prod_peso = null;
$prod_preco = null;
$prod_altura = null;
$prod_comprimento = null;
$prod_largura = null;
$resultado_xml_calculo_frete = null;

if (isset($_POST['prod_id'])) {
    $cep_destino = $_POST['cep_destino'];
    $prod_peso = $_POST['prod_peso'];
    $prod_preco = $_POST['prod_preco'];
    $prod_altura = $_POST['prod_altura'];
    $prod_comprimento = $_POST['prod_comprimento'];
    $prod_largura = $_POST['prod_largura'];

    $resultado_xml_calculo_frete = Frete::calcular_frete($cep_destino, $prod_peso, $prod_preco, $prod_altura, $prod_comprimento, $prod_largura);
    var_dump($resultado_xml_calculo_frete);
}

// ***** FIM DO TESTE CALCULO FRETE *****


$smarty->display('produto.tpl');

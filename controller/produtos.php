<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 15/05/18
 * Time: 10:18
 */

session_start();

$smarty = new Template();
$produtos = new Produtos();
$produtos1 = new Produtos();

$smarty->assign('base_url_img', Rotas::get_imagem_produtos_url());
$smarty->assign('produto', Rotas::get_produto());

// ***** Teste de paginação *****
$itens_por_pagina = 8;
$pagina_atual = Rotas::id_da_pagina_de_produtos(Rotas::$pag[1]);
$produtos1->get_produtos(); // seleciona todos os produtos do banco por ordem decrescente
$total_de_produtos = $produtos1->total_data(); // conta o total de produtos que tem no banco de dados
$numero_de_paginas = ceil($total_de_produtos / $itens_por_pagina); // paginas necessarias para apresentar os itens
$inicio = ($itens_por_pagina * $pagina_atual) - $itens_por_pagina; // calcula o inicio da visualização
$produtos->get_produtos_by_pag($inicio, $itens_por_pagina); // seleciona os produtos do banco usando LIMIT

$smarty->assign('produtos', $produtos->get_itens());
$smarty->assign('numero_de_paginas', $numero_de_paginas - 1);
$smarty->assign('url_paginacao', Rotas::get_produtos()); // traz a url base_url/produtos
$smarty->assign('pagina_anterior', Rotas::get_produtos() . ($pagina_atual - 1));
$smarty->assign('pagina_posterior', Rotas::get_produtos() . ($pagina_atual + 1));
// ***** Fim do teste de paginação *****

// ***** Teste de sessão *****


//$alerta_sucesso = isset($_SESSION['sucesso']) ? 'sucesso' : null;
//$alerta_erro = isset($_SESSION['erro']) ? 'erro' : null;
//
//$smarty->assign('alerta_sucesso', $alerta_sucesso);
//$smarty->assign('alerta_erro', $alerta_erro);

session_destroy();
// ***** Fim do teste de sessão *****

$smarty->display('produtos.tpl');

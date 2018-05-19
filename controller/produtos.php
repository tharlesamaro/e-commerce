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

# paginação
$itens_por_pagina = 8;
$pagina_atual = Rotas::id_da_pagina_de_produtos(Rotas::$pag[1]);
$produtos1->get_produtos();
$total_de_produtos = $produtos1->total_data();
$numero_de_paginas = ceil($total_de_produtos / $itens_por_pagina);
$inicio = ($itens_por_pagina * $pagina_atual) - $itens_por_pagina;
$produtos->get_produtos_by_pag($inicio, $itens_por_pagina);

# assinaturas pro Smarty
$smarty->assign('produtos', $produtos->get_itens());
$smarty->assign('base_url_img', Rotas::get_imagem_produtos_url());
$smarty->assign('produto', Rotas::get_produto());
$smarty->assign('numero_de_paginas', $numero_de_paginas - 1);
$smarty->assign('url_paginacao', Rotas::get_produtos());
$smarty->assign('pagina_anterior', Rotas::get_produtos() . ($pagina_atual - 1));
$smarty->assign('pagina_posterior', Rotas::get_produtos() . ($pagina_atual + 1));

session_destroy();

$smarty->display('produtos.tpl');

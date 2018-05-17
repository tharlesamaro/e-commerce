<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 15/05/18
 * Time: 10:18
 */

$smarty = new Template();
$produtos = new Produtos();
$produtos1 = new Produtos();

$smarty->assign('produto', Rotas::get_produto());

/**
 * Teste de paginação
 */

// função de teste, depois irá ser realocada
function id_da_pagina($id) {
    if ($id == 0 || $id == null) {
        return 1;
    }
    return $id;
}

$itens_por_pagina = 8;
$pagina_atual = id_da_pagina(Rotas::$pag[1]);
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

/**
 * Fim do teste de paginação
 */

$smarty->display('produtos.tpl');

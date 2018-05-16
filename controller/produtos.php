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
//$produtos->get_produtos();
//$smarty->assign('produtos', $produtos->get_itens());
$smarty->assign('produto', Rotas::get_produto());





//teste paginação *********************

//numero de itens por pagina
$itens_por_pagina = 8;

//pegar_a_pagina_atual
$pagina_atual = Rotas::$pag[1];

//query para pegar os registros com o limite


$produtos1->get_produtos();
$total_de_produtos = $produtos1->total_data();

//numero de paginas necessarias para apresentar os itens
$numero_de_paginas = ceil($total_de_produtos / $itens_por_pagina);

//calcular o inicio da visualização
$inicio = ($itens_por_pagina * $pagina_atual) - $itens_por_pagina;

$produtos->get_produtos_by_pag($inicio, $itens_por_pagina);

$smarty->assign('produtos', $produtos->get_itens());

$smarty->assign('numero_de_paginas', $numero_de_paginas);



$smarty->display('produtos.tpl');

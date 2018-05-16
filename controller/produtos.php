<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 15/05/18
 * Time: 10:18
 */

$smarty = new Template();
$produtos = new Produtos();
$produtoteste = new Produtos();
//$produtos->get_produtos();
//$smarty->assign('produtos', $produtos->get_itens());
$smarty->assign('produto', Rotas::get_produto());





//teste paginação *********************

//numero de itens por pagina
$itens_por_pagina = 8;

//pegar_a_pagina_atual
$pagina_atual = Rotas::$pag[1] - 1;

//query para pegar os registros com o limite
$produtos->get_produtos_by_pag($pagina_atual, $itens_por_pagina);

$smarty->assign('produtos', $produtos->get_itens());

$produtoteste->get_produtos();
$num_total = $produtoteste->total_data();

$numero_de_paginas = ceil($num_total / $itens_por_pagina);

$smarty->assign('numero_de_paginas', $numero_de_paginas);



$smarty->display('produtos.tpl');

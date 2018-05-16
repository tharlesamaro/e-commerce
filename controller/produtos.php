<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 15/05/18
 * Time: 10:18
 */

$smarty = new Template();

$produtos = new Produtos();
$produtos->get_produtos();

$itens_por_pagina = 8;

$smarty->assign('produtos', $produtos->get_itens());
$smarty->assign('produto', Rotas::get_produto());

$total_de_paginas = ceil($produtos->total_data() / $itens_por_pagina);
//$inicio_da_visualizacao = ();

$smarty->display('produtos.tpl');
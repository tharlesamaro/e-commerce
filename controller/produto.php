<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 16/05/18
 * Time: 01:49
 */

$smarty = new Template();
$produto = new Produtos();

$produto->get_produto_by_id(Rotas::$pag[1]);

$smarty->assign('PRODUTO', $produto->get_itens());

$smarty->display('produto.tpl');
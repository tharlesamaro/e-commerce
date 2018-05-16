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

$smarty->assign('PRO', $produtos->get_itens());

$smarty->display('produtos.tpl');
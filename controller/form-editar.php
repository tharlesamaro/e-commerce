<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 21/05/18
 * Time: 02:37
 */

session_start();
$smarty = new Template();
$produtos = new Produtos();
$id = Rotas::$pag[1];
$produtos->get_produto_by_id($id);
$smarty->assign('produto', $produtos->get_itens());
$smarty->assign('editar', Rotas::get_editar());
$smarty->assign('base_url', Rotas::get_site_home());
$smarty->display('editar.tpl');
<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 14/05/18
 * Time: 15:36
 */

require './lib/autoload.php';

$database = new Conexao();
$smarty = new Template();
$smarty->assign('base_url', Rotas::get_site_home());
$smarty->assign('titulo', Config::SITE_NAME);
$smarty->assign('base_url_img', Rotas::get_imagem_geral_url());
$smarty->display('index.tpl');

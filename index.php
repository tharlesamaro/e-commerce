<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 14/05/18
 * Time: 15:36
 */

require './lib/autoload.php';

$smarty = new Template();

$smarty->assign('NOME', 'Tharles');
$smarty->assign('BASE_URL', Rotas::get_site_home());
$smarty->display('index.tpl');

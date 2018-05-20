<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 20/05/18
 * Time: 12:32
 */

session_start();
$smarty = new Template();
$smarty->assign('base_url', Rotas::get_site_home());
session_destroy();
$smarty->display('cadastro.tpl');
<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 15/05/18
 * Time: 10:19
 */

$smarty = new Template();
$smarty->assign('BASE_URL', Rotas::get_site_home());
$smarty->display('form_cadastro.tpl');
<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 14/05/18
 * Time: 15:36
 */

require './lib/autoload.php';

$smarty = new Template();

Rotas::get_pag();

$smarty->assign('NOME', 'Tharles');

$smarty->display('index.tpl');

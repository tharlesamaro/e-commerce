<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 20/05/18
 * Time: 13:34
 */

session_start();
$produtos = new Produtos();
$id = Rotas::$pag[1];
try {
    $produtos->deletar_produto($id);
    $_SESSION['prod_deletado_sucesso'] = true;
} catch (Exception $e) {
    $_SESSION['prod_deletado_erro'] = true;
}
header("Location: /ecommerce/produtos");
die();

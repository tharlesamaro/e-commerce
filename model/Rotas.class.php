<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 14/05/18
 * Time: 16:12
 */

Class Rotas
{
    public static $pag;
    public static $pag_prod_id;

    function __construct()
    {
        parent::__construct();
    }

    static function get_site_home()
    {
        return Config::SITE_URL . '/' . Config::SITE_FOLDER;
    }

    static function get_site_root()
    {
        return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_FOLDER;
    }

    static function get_site_cadastro()
    {
        return self::get_site_home() . '/cadastro';
    }

    static function get_produto()
    {
        return self::get_site_home() . '/produto/';
    }

    static function get_pag()
    {
        if (isset($_GET['pag'])) {
            $pagina = $_GET['pag'];
            self::$pag = explode('/', $pagina);
            $pagina = 'controller/' . self::$pag[0] . '.php';
            if (file_exists($pagina)) {
                include $pagina;
            } else {
                include '404.php';
            }
        } else {
            include 'controller/produtos.php';
        }
    }
}

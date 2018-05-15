<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 14/05/18
 * Time: 16:12
 */

Class Rotas
{
    function __construct()
    {
        parent::__construct();
    }

    public static $pag;

    static function get_pag()
    {
        if (isset($_GET['pag'])) {

            $pagina = $_GET['pag'];

            self::$pag = explode('/', $pagina);

            $pagina = 'controller/' . self::$pag[0] . '.php';

            if (file_exists($pagina)) {
                include $pagina;
            } else {
                include 'erro.php';
            }
        }
    }
}

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

    // return: localhost/ecommerce/
    static function get_site_home()
    {
        return Config::SITE_URL . '/' . Config::SITE_FOLDER;
    }

    static function get_site_root()
    {
        return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_FOLDER;
    }

    // retorna a url da página de cadastro de produtos
    static function get_site_cadastro()
    {
        return self::get_site_home() . '/cadastro';
    }

    // retorna a url da página de produtos
    static function get_produtos()
    {
        return self::get_site_home() . '/produtos/';
    }

    // retorna a url da página específica do produto
    static function get_produto()
    {
        return self::get_site_home() . '/produto/';
    }

    // retorna a o diretório da pasta de imagens dos produtos
    static function get_imagem_pasta_produtos()
    {
        return 'assets/img/produtos/';
    }

    // retorna o caminho completo do domínio do site juntamente com a pasta das imagens dos produtos
    static function get_imagem_produtos_url()
    {
        return self::get_site_home() . '/' . self::get_imagem_pasta_produtos();
    }

    // retorna o caminho da pasta raíz das imagens
    static function get_imagem_pasta_geral()
    {
        return 'assets/img/';
    }

    //retorna o caminho completo do domńio do site juntamente com a pasta raíz das imagens
    static function get_imagem_geral_url()
    {
        return self::get_site_home() . '/' . self::get_imagem_pasta_geral();
    }

    // tratamento para quando o id da página de produtos for menor ou igual a 0
    static function id_da_pagina_de_produtos($id)
    {
        return ($id <= 0 || $id == null) ? 1 : $id;
    }

    // implementação da url amigável (configurar também o apache2)
    static function get_pag()
    {
        if (isset($_GET['pag'])) {
            $pagina = $_GET['pag'];
            self::$pag = explode('/', $pagina);
            $pagina = 'controller/' . self::$pag[0] . '.php';
            return (file_exists($pagina)) ? include $pagina : include '404.php';
        }
        //include 'controller/produtos.php';
        header('Location: /ecommerce/produtos/1');
        die();
    }
}

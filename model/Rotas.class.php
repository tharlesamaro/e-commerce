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

    # retorna a url básica do site: domínio + pasta do projeto
    static function get_site_home()
    {
        return Config::SITE_URL . '/' . Config::SITE_FOLDER;
    }

    # retorna a url da página de cadastro de produtos
    static function get_site_cadastro()
    {
        return self::get_site_home() . '/cadastro';
    }

    # retorna a url da página de produtos
    static function get_produtos()
    {
        return self::get_site_home() . '/produtos/';
    }

    # retorna a url da página do produto
    static function get_produto()
    {
        return self::get_site_home() . '/produto/';
    }

    # retorna a url da pasta de imagens dos produtos
    static function get_imagem_pasta_produtos()
    {
        return 'assets/img/produtos/';
    }

    # retorna a url completa da pasta de imagens dos produtos
    static function get_imagem_produtos_url()
    {
        return self::get_site_home() . '/' . self::get_imagem_pasta_produtos();
    }

    # retorna a url da pasta pricipal das imagens
    static function get_imagem_pasta_geral()
    {
        return 'assets/img/';
    }

    # retorna a url completa da pasta princial das imagens
    static function get_imagem_geral_url()
    {
        return self::get_site_home() . '/' . self::get_imagem_pasta_geral();
    }

    # retorna o id 1 quando o id da página de produtos for menor ou igual a 0
    static function id_da_pagina_de_produtos($id)
    {
        return ($id <= 0 || $id == null) ? 1 : $id;
    }

    # tratamento das urls amigáveis
    static function get_pag()
    {
        if (isset($_GET['pag'])) :
            $pagina = $_GET['pag'];
            self::$pag = explode('/', $pagina);
            $pagina = 'controller/' . self::$pag[0] . '.php';
            return (file_exists($pagina)) ? include $pagina : include '404.php';
        endif;
        header('Location: /ecommerce/produtos/1');
        die();
    }
}

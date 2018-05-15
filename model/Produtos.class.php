<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 15/05/18
 * Time: 12:13
 */

class Produtos
{
    private $altura;
    private $comprimento;
    private $cor;
    private $descricao;
    private $id;
    private $largura;
    private $nome;
    private $peso;
    private $preco;

    function __construct()
    {
        parent::__construct;
    }

    function get_produtos()
    {
        $query = "SELECT * FROM produtos ORDER BY data_atualizacao DESC";
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 15/05/18
 * Time: 12:14
 */

class Frete
{
    function __construct()
    {
        parent::__construct;
    }

    # consulta o valor do frete com o webservice dos correios e retorna um xml.
    static function calcular_frete($cep_destino, $frete, $peso, $preco, $altura, $comprimento, $largura)
    {
        $url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?";
        $url .= "nCdEmpresa=";
        $url .= "&sDsSenha=";
        $url .= "&nCdServico=" . $frete;
        $url .= "&sCepOrigem=" . 20081902;
        $url .= "&sCepDestino=" . $cep_destino;
        $url .= "&nVlPeso=" . $peso;
        $url .= "&nCdFormato=1";
        $url .= "&nVlComprimento=" . $comprimento;
        $url .= "&nVlAltura=" . $altura;
        $url .= "&nVlLargura=" . $largura;
        $url .= "&nVlDiametro=0";
        $url .= "&sCdMaoPropria=n";
        $url .= "&nVlValorDeclarado=" . $preco;
        $url .= "&sCdAvisoRecebimento=n";
        $url .= "&StrRetorno=xml";
        $xml = simplexml_load_file($url);
        return $xml->cServico;
    }
}

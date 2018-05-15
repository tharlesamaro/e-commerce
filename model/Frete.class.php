<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 15/05/18
 * Time: 12:14
 */

class Frete
{
    const CEP_ORIGEM = 20081902;
    function __construct()
    {
        parent::__construct;
    }

    static function calcular_frete($cep_destino, $peso, $preco, $frete, $altura = 6, $comprimento = 20, $largura = 20)
    {
        $url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?";
        $url .= "nCdEmpresa=";
        $url .= "&sDsSenha=";
        $url .= "&nCdServico=" . $frete;
        $url .= "&sCepOrigem=" . self::CEP_ORIGEM;
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
<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 15/05/18
 * Time: 12:13
 */

class Produtos extends Conexao
{
    function __construct()
    {
        parent::__construct();
    }

    function get_produtos()
    {
        $query = "SELECT * FROM produtos ORDER BY prod_data_atualizacao DESC";
        $this->execute_query($query);
        $this->get_lista();
    }

    private function get_lista()
    {
        $i = 0;
        while ($lista = $this->list_data()) {
            $this->itens[$i] = [
                'prod_id' => $lista['prod_id'],
                'prod_nome' => $lista['prod_nome'],
                'prod_preco' => $lista['prod_preco'],
                'prod_altura' => $lista['prod_altura'],
                'prod_comprimento' => $lista['prod_comprimento'],
                'prod_peso' => $lista['prod_peso'],
                'prod_largura' => $lista['prod_largura'],
                'prod_promocao' => $lista['prod_promocao'],
                'prod_preco_promocao' => $lista['prod_preco_promocao'],
                'prod_data_inicial_promocao' => $lista['prod_data_inicial_promocao'],
                'prod_data_final_promocao' => $lista['prod_data_final_promocao'],
                'prod_imagem' => $lista['prod_imagem']
            ];
            $i++;
        }
    }
}

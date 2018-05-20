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

    # seleciona a lista de produtos do banco de dados  por data de atualização em ordem decrescente
    function get_produtos()
    {
        $query = "SELECT * FROM produtos ORDER BY prod_data_atualizacao DESC";
        $this->execute_query($query);
        $this->get_lista();
    }

    # seleciona o produto no banco pelo ID
    function get_produto_by_id($id)
    {
        $query = "SELECT * FROM produtos WHERE prod_id = {$id}";
        $this->execute_query($query);
        $this->get_lista();
    }

    # seleciona a quantidade de produtos que devem ser exibidos por página
    function get_produtos_by_pag($pagina, $itens_por_pagina)
    {
        $query = "SELECT * FROM produtos ORDER BY prod_data_atualizacao DESC LIMIT {$pagina}, {$itens_por_pagina}";
        $this->execute_query($query);
        $this->get_lista();
    }

    # percorre os produtos e guarda os mesmos em um array de itens
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
                'prod_imagem' => $lista['prod_imagem'],
                'prod_descricao' => $lista['prod_descricao']
            ];
            $i++;
        }
    }

    # função para cadastrar um novo produto
    function cadastrar_produto(
        $prod_nome,
        $prod_descricao,
        $prod_preco,
        $prod_altura,
        $prod_comprimento,
        $prod_peso,
        $prod_largura,
        $prod_promocao,
        $prod_preco_promocao,
        $prod_data_inicial_promocao,
        $prod_data_final_promocao,
        $prod_imagem
    )
    {
        $query = "INSERT INTO produtos (prod_nome, prod_descricao, prod_preco, prod_altura, prod_comprimento, prod_peso, prod_largura, prod_promocao, prod_preco_promocao, prod_data_inicial_promocao, prod_data_final_promocao, prod_imagem) VALUES ('{$prod_nome}', '{$prod_descricao}', {$prod_preco}, {$prod_altura}, {$prod_comprimento}, {$prod_peso}, {$prod_largura}, '{$prod_promocao}', {$prod_preco_promocao}, '{$prod_data_inicial_promocao}', '{$prod_data_final_promocao}', '{$prod_imagem}')";
        $this->execute_query($query);
    }

    # função para deletar produto
    function deletar_produto($id)
    {
        $query = "DELETE FROM produtos WHERE prod_id = {$id}";
        $this->execute_query($query);
    }
}

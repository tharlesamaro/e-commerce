<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 19/05/18
 * Time: 10:31
 */

session_start();

if (isset($_POST['nome'])) {

    # caso o preço da data da promoção venham sem dados
    $data_default = '0000-00-00';
    $preco_default = 0.00;

    # retirando "," do preço (depois criar uma função)
    $preco_promocao_formatado = str_replace(',', '', $_POST['preco_promocao']);
    $preco_promo_vazio = $preco_promocao_formatado == null || $preco_promocao_formatado == "" || is_numeric($preco_promocao_formatado) != true;
    $preco_promocao = $preco_promo_vazio ? $preco_default : $preco_promocao_formatado;

    # formatando data do inicio da promoção para o padrão do MySQL
    $data_formatada_para_o_db = implode("-", array_reverse(explode("/", $_POST['data_inicio_promocao'])));
    $data_vazia = ($_POST['data_inicio_promocao'] == null || $_POST['data_inicio_promocao'] == "");
    $data_inicio = $data_vazia ? $data_default : $data_formatada_para_o_db;
    # # formatando data do final da promoção para o padrão do MySQL
    $data2_formatada_para_o_db = implode("-", array_reverse(explode("/", $_POST['data_final_promocao'])));
    $data2_vazia = ($_POST['data_final_promocao'] == null || $_POST['data_final_promocao'] == "");
    $data_final = $data2_vazia ? $data_default : $data2_formatada_para_o_db;

    # recebendo dados já validados via post
    $prod_nome = $_POST['nome'];
    $prod_descricao = $_POST['descricao'];
    $prod_preco = str_replace(',', '', $_POST['preco']);
    $prod_altura = $_POST['altura'];
    $prod_comprimento = $_POST['comprimento'];
    $prod_peso = $_POST['peso'];
    $prod_largura = $_POST['largura'];
    $prod_promocao = $_POST['promocao'];
    $prod_preco_promocao = $preco_promocao;
    $prod_data_inicio_promocao = $data_inicio;
    $prod_data_final_promocao = $data_final;
    #tratando imagem
    $prod_imagem = $_FILES['imagem']['name'];
    $prod_imagem_extensao = strtolower(substr($prod_imagem, -4));
    $prod_imagem_nome = md5(time()) . $prod_imagem_extensao;

    try {
        $produto = new Produtos();

        #cadastrando produto no banco
        $produto->cadastrar_produto(
            $prod_nome,
            $prod_descricao,
            $prod_preco,
            $prod_altura,
            $prod_comprimento,
            $prod_peso,
            $prod_largura,
            $prod_promocao,
            $prod_preco_promocao,
            $prod_data_inicio_promocao,
            $prod_data_final_promocao,
            $prod_imagem_nome
        );

        #pasta onde a imagem vai ser salva
        $_UP['pasta'] = './assets/img/produtos/';

        # salva a imagem
        move_uploaded_file($_FILES['imagem']['tmp_name'], $_UP['pasta'] . $prod_imagem_nome);

        $_SESSION['cadastro_sucesso'] = true;
    } catch (Exception $erro) {
        $_SESSION['cadastro_erro'] = true;
    }
}

header("Location: form-cadastro/");
die();
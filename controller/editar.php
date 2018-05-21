<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 21/05/18
 * Time: 10:12
 */

//if (isset($_POST['id'])) {
if (Rotas::$pag[1] > 0) {
    # caso o preço da data da promoção venham sem dados
    $data_default = '0000-00-00';
    $preco_default = 0.00;

    # retirando "," do preço
    $preco_promocao_formatado = str_replace(',', '', $_POST['preco_promocao']);
    $preco_promo_vazio = $preco_promocao_formatado == null || $preco_promocao_formatado == "" || is_numeric($preco_promocao_formatado) != true;
    $preco_promocao = $preco_promo_vazio ? $preco_default : $preco_promocao_formatado;

    # formatando data do inicio da promoção para o padrão do MySQL
    $data_formatada_para_o_db = implode("-", array_reverse(explode("/", $_POST['data_inicio_promocao'])));
    $data_vazia = ($_POST['data_inicio_promocao'] == null || $_POST['data_inicio_promocao'] == "");
    $data_inicio = $data_vazia ? $data_default : $data_formatada_para_o_db;
    # formatando data do final da promoção para o padrão do MySQL
    $data2_formatada_para_o_db = implode("-", array_reverse(explode("/", $_POST['data_final_promocao'])));
    $data2_vazia = ($_POST['data_final_promocao'] == null || $_POST['data_final_promocao'] == "");
    $data_final = $data2_vazia ? $data_default : $data2_formatada_para_o_db;

    # recebendo dados já validados via post
    $prod_id = Rotas::$pag[1];
    $prod_nome = $_POST['nome'];
    $prod_descricao = $_POST['descricao'];
    $prod_preco = str_replace(',', '', $_POST['preco']);
    $prod_promocao = $_POST['promocao'];
    $prod_preco_promocao = $preco_promocao;
    $prod_data_inicio_promocao = $data_inicio;
    $prod_data_final_promocao = $data_final;

    #tratando imagem
    $imagem_do_banco = $_POST['form_edit_imagem_hidden'];
    $imagem_vazia = $_FILES['form_edit_imagem']['name'] == null || $_FILES['form_edit_imagem']['name'] == "" || is_string($_FILES['form_edit_imagem']['name']) != true;
    if ($imagem_vazia) {
        $prod_imagem_nome = $imagem_do_banco;
    } else {
        $prod_imagem = $_FILES['form_edit_imagem']['name'];
        $prod_imagem_extensao = strtolower(substr($prod_imagem, -4));
        $prod_imagem_nome = md5(time()) . $prod_imagem_extensao;

        #pasta onde a imagem vai ser salva
        $_UP['pasta'] = './assets/img/produtos/';
        # salva a imagem
        move_uploaded_file($_FILES['form_edit_imagem']['tmp_name'], $_UP['pasta'] . $prod_imagem_nome);
    }

    # atualizando produtos
    try {
        $produto = new Produtos();

        #cadastrando produto no banco
        $produto->atualizar_produto(
            $prod_id,
            $prod_nome,
            $prod_descricao,
            $prod_preco,
            $prod_promocao,
            $prod_preco_promocao,
            $prod_data_inicio_promocao,
            $prod_data_final_promocao,
            $prod_imagem_nome
        );

        $_SESSION['atualizado_sucesso'] = true;
    } catch (Exception $erro) {
        $_SESSION['atualizado_erro'] = true;
    }

    header("Location: /ecommerce/produtos/1");
    die();
}

$_SESSION['atualizado_sem_id'] = true;

header("Location: /ecommerce/produtos/1");
die();

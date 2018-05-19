<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 19/05/18
 * Time: 10:31
 */

session_start();

if (isset($_POST['nome'])) {
    # recebendo dados do formulário via post
    $prod_nome = $_POST['nome'];
    $prod_preco = str_replace(',','.', $_POST['preco']);
    $prod_descricao = $_POST['descricao'];
    $prod_promocao = $_POST['promocao'];
    $prod_preco_promocao = $_POST['preco_promocao'];
    $prod_data_inicio_promocao = $_POST['data_inicio_promocao'];
    $prod_data_final_promocao = $_POST['data_final_promocao'];
    $prod_peso = $_POST['peso'];
    $prod_altura = ($_POST['altura'] != null && $_POST['altura'] != 0) ? $_POST['altura'] : 6;
    $prod_comprimento = ($_POST['comprimento'] != null && $_POST['comprimento'] != 0) ? $_POST['comprimento'] : 20;
    $prod_largura = ($_POST['largura'] != null && $_POST['largura'] != 0) ? $_POST['largura'] : 20;
    $prod_imagem = ($_FILES['imagem']['name'] != null) ? $_FILES['imagem']['name'] : 'teste.jpg';
    $prod_imagem_extensao = strtolower(substr($prod_imagem, -4)); # recupera a extensão do arquivo
    $prod_imagem_nome = md5(time()) . $prod_imagem_extensao;

    try {
        #pasta onde a imagem vai ser salva
        $_UP['pasta'] = './assets/img/produtos/';

        # salva a imagem
        move_uploaded_file($_FILES['imagem']['tmp_name'], $_UP['pasta'] . $prod_imagem_nome);

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

        $_SESSION['sucesso'];
    } catch (Exception $erro) {
        $_SESSION['erro'];
    }
}

$smarty = new Template();
$smarty->assign('base_url', Rotas::get_site_home());

session_destroy();

$smarty->display('cadastro.tpl');
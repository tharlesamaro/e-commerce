<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 18/05/18
 * Time: 15:10
 */
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

# Informações da compra do cliente
$cliente_email = $_POST['email'];
$cliente_nome = $_POST['nome'];
$cliente_cep = $_POST['cliente_cep'];
$produto_nome = $_POST['prod_nome'];
$produto_valor_total = $_POST['valor_total'];

# Envio do e-mail via SMTP Gmail
$mail = new PHPMailer(true);
try {
    # configurações básicas
    $mail->isSMTP();
    $mail->Host = Config::EMAIL_HOST;
    $mail->SMTPAuth = true;
    $mail->Username = Config::EMAIL_USER;
    $mail->Password = Config::EMAIL_PASSWORD;
    $mail->SMTPSecure = Config::EMAIL_SMTPSECURE;
    $mail->Port = Config::EMAIL_PORT;
    # Recipientes
    $mail->setFrom(Config::EMAIL_ADMIN, Config::EMAIL_FROM_NAME);
    $mail->addAddress($cliente_email, $cliente_nome);
    $mail->addReplyTo(Config::EMAIL_ADMIN, Config::EMAIL_INFORMATION);
    $mail->addCC(Config::EMAIL_ADMIN);
    # Conteúdo
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Nova compra efetuada!';
    $mail->Body = '<b>Compra efetuada com sucesso!</b> ' . '<br><br><b>Cliente:</b> ' . $cliente_nome . '<br><b>Email:</b> ' . $cliente_email . '<br><b>Produto:</b> ' . $produto_nome . '<br><b>Valor total:</b> R$ ' . $produto_valor_total . '<br><b>CEP Destino:</b> ' . $cliente_cep;
    $mail->send();

    $_SESSION['sucesso'];
} catch (Exception $e) {
    $_SESSION['erro'];
}

header("Location: produtos/1");
die();

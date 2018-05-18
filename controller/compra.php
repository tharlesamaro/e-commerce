<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 18/05/18
 * Time: 15:10
 */

$smarty = new Template();

$email_comprador = $_POST['email'];
$nome_comprador = $_POST['nome'];
$nome_produto = $_POST['prod_nome'];
$valor_da_compra = $_POST['valor_total'];
$cep_destino = $_POST['cep_destino'];

### IMPLEMENTAÇÃO DO ENVIO DE EMAIL ###

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);                    // Passing `true` enables exceptions
try {
    //Server settings
    //$mail->SMTPDebug = 2;                               // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = Config::EMAIL_HOST;                     // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = Config::EMAIL_USER;                 // SMTP username
    $mail->Password = Config::EMAIL_PASSWORD;             // SMTP password
    $mail->SMTPSecure = Config::EMAIL_SMTPSECURE;         // Enable TLS encryption, `ssl` also accepted
    $mail->Port = Config::EMAIL_PORT;                     // TCP port to connect to

    //Recipients
    $mail->setFrom(Config::EMAIL_FROM, Config::EMAIL_FROM_NAME);
    $mail->addAddress($email_comprador, $nome_comprador);   // Add a recipient | Name is optional
    $mail->addReplyTo(Config::EMAIL_FROM, Config::EMAIL_INFORMATION);
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Nova compra efetuada!';
    $mail->Body = '<b>Compra efetuada com sucesso! ' . '<br><br>Cliente: ' . $nome_comprador . '<br>Email: ' . $email_comprador .'<br>Produto: ' . $nome_produto . '<br>Valor da compra(frete incluso): ' . $valor_da_compra . '<br>CEP Destino: ' . $cep_destino;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

    $smarty->assign('email_mensagem', 'Compra efetuada com sucesso! Obrigado por comprar em nossa loja! Volte sempre!');
    $smarty->display('compra_finalizada.tpl');
} catch (Exception $e) {
    $smarty->assign('email_mensagem,', 'Erro ao finalizar sua compra! Por favor entre em contato com o nosso suporte!');
    $smarty->display('compra_finalizada.tpl');
}

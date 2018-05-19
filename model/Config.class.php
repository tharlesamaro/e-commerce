<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 15/05/18
 * Time: 10:37
 */

Class Config
{
    # informações do site
    const SITE_URL = "http://localhost";
    const SITE_FOLDER = "ecommerce";
    const SITE_NAME = "E-commerce | Tharles";

    # informaões do banco de dados
    const DB_HOST = "localhost";
    const DB_USER = "tharles";
    const DB_PASSWORD = "12345678";
    const DB_DATABASE = "ecommerce";

    # informações para o PHPMailer
    const EMAIL_HOST = "smtp.gmail.com";
    const EMAIL_USER = "tecommerce.tharles@gmail.com";
    const EMAIL_PASSWORD = "Ecommerce2018";
    const EMAIL_SMTPSECURE = "tls";
    const EMAIL_PORT = 587;
    const EMAIL_ADMIN = "tharlesamaro@gmail.com";
    const EMAIL_FROM_NAME = "Tharles Amaro";
    const EMAIL_INFORMATION = "Nova compra efetuada!";
}


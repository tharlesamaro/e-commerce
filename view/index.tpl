<!doctype html>
<html lang="pt-br">
<head>
    <title>{$titulo}</title>
    {*meta*}
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Tharles Amaro">
    <meta name="author" content="E-commerce simples com PHP">
    {*css*}
    <link rel="stylesheet" href="{$base_url}/assets/css/normalize.css">
    <link rel="stylesheet" href="{$base_url}/assets/css/main.css">
    <link rel="stylesheet" href="{$base_url}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{$base_url}/assets/font/web-fonts-with-css/css/fontawesome-all.css">
    <link rel="stylesheet" href="{$base_url}/assets/css/animate.css">
    {*google font*}
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
{*navbar*}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{$base_url}">
            <img src="{$base_url_img}logo.svg" width="50" height="50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            {*menu*}
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{$base_url}">Início
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{$base_url}/cadastro">Cadastro</a>
                </li>
            </ul>
            {*/menu*}
        </div>
    </div>
</nav>
{*/navbar*}
<div class="container conteudo">
    {php}
        Rotas::get_pag();
    {/php}
</div>
{*footer*}{*/footer}
{*javascript*}
<script src="{$base_url}/assets/js/jquery/jquery.min.js"></script>
<script src="{$base_url}/assets/js/jquery/jquery1.10.2.min.js" type="text/javascript"></script>
<script src="{$base_url}/assets/js/jquery.maskedinput.js"></script>
<script src="{$base_url}/assets/js/jquery.maskMoney.min.js"></script>
<script src="{$base_url}/assets/js/jquery-validation-1.17.0/dist/jquery.validate.js"></script>
<script src="{$base_url}/assets/js/bootstrap.min.js"></script>
<script src="{$base_url}/assets/js/main.js"></script>
{*/javascript*}
</body>
</html>

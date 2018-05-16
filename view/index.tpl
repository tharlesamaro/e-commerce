<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-commerce | Tharles</title>
    <link rel="stylesheet" href="{$BASE_URL}/assets/css/normalize.css">
    <link rel="stylesheet" href="{$BASE_URL}/assets/css/main.css">
    <link rel="stylesheet" href="{$BASE_URL}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{$BASE_URL}/assets/font/web-fonts-with-css/css/fontawesome-all.css">
    <script src="{$BASE_URL}/assets/js/jquery/jquery.min.js"></script>
    <script src="{$BASE_URL}/assets/js/jquery/jquery1.10.2.min.js" type="text/javascript"></script>
    <script src="{$BASE_URL}/assets/js/main.js"></script>
    <script src="{$BASE_URL}/assets/js/bootstrap.min.js"></script>
    <script src="{$BASE_URL}/assets/js/jquery.maskedinput.js"></script>
    <script src="{$BASE_URL}/assets/js/jquery.maskMoney.min.js"></script>
    <script src="{$BASE_URL}/assets/js/mascaras.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{$BASE_URL}">
            <img src="{$BASE_URL}/assets/img/logo.svg" width="50" height="50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{$BASE_URL}">Início
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{$BASE_URL}/cadastro">Cadastro</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container conteudo">
    {php}
        Rotas::get_pag();
    {/php}
</div>

{*<footer class="py-5 bg-dark">*}
    {*<div class="container">*}
        {*<p class="m-0 text-center text-white">Copyright &copy; Tharles Amaro 2018</p>*}
    {*</div>*}
{*</footer>*}
</body>
</html>
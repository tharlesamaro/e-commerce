# E-commerce simples com PHP

Requisitos do sistema:
-

- Página de cadastro de produtos:

    - Solicitar o cadastro de campos essenciais para que as regras de negócio sejam aplicadas;
    - Validar campos essenciais;
    - Colocar máscaras em campos que receberão números como entrada;

- Página inicial:

    - Listar produtos cadastrados por ordem de data de atualização;
    - Exibir foto, nome e preço dos produtos;
    - Ao clicar deve ver a página do produto;

- Página do produto:
    - Deve exibir o nome, foto, preço e descrição do produto;
    - Deve ter um campo para simulação de frete onde será inserido um CEP e poderá visualizar quanto sairá o frete do produto e o prazo de entrega;
    - Ao clicar no botão comprar irá abrir um modal pedindo nome e email do comprador e eu devo receber um email com as informações do comprador e o produto comprado;

- Outras regras de negócio:

    - Os produtos poderão entrar em promoção e ter um preço diferente em um período de data que será definido;
    - Enquanto esta promoção estiver em vigor o preço do produto deve ser exibido com o valor promocional com o valor original acima dele e cortado;
    - O CEP de origem das mercadorias será 20081-902;

- Observações:

    - A interface deve usar algum framework CSS;
    - O código deve ser escrito usando PHP puro;
    - Bibliotecas pontuais são permitidas, mas não pode usar framework ORM ou MVC

Estrutura usada no Projeto
-

- Diretórios
    - assets
    - controller
    - dump
    - lib
    - model
    - view
- Arquivos
    - .htaccess
    - 404.php
    - composer.json
    - index.php
    
Detalhes da estrutura
-
        
**assets:** diretório onde ficam todos os arquivos css, javascript, imagens e fontes.

**controller:** diretório para salvar todos os arquivos Controllers da estrutura MVC.

**dump:** dump do banco de dados utilizado.

**lib:** diretório onde fica as bibliotecas.

**model:** diretório para salvar todas as classes usadas no projeto. Models da estrutura MVC.

**view:** diretório onde ficam as Views da estrutura MVC.

**.htacess:** configuração de reescrita de URL do servidor apache2.

**404.php:** página de status 404, é usada quando alguma rota não é encontrada.

**composer.json:** configurações básicas do composer.

**index.php:** página principal do projeto, através dela todas as outras serão chamadas. Faz a requisição do autoload do composer.

Tecnologias usadas
-

- Apache2
- Bootstrap
- CSS
- Composer
- Fontawesome
- Google Fonts
- HTML
- JQuery
- Linux
- MariaDB
- PDO
- PHP
- PHPMailer
- PHPMyAdmin
- PHPStorm
- Smarty

**OBS: todos os testes foram feitos nos navegadores Mozila Firefox e Google Chrome.**
{*session*}
{if $smarty.session.compra_sucesso}
    <div><p class="alert-success text-center">Compra concluida com sucesso!</p></div>
{/if}
{if $smarty.session.compra_erro}
    <div><p class="alert-danger text-center">Erro ao efetuar compra! Entre em contato conosco.</p></div>
{/if}
{if $smarty.session.prod_deletado_sucesso}
    <div><p class="alert-success text-center">Produto deletado com sucesso!</p></div>
{/if}
{if $smarty.session.prod_deletado_erro}
    </div><p class="alert-success text-center">Erro ao tentar deletar produto!</p></div>
{/if}

<div class="row text-center">
    {*produtos*}
    {foreach from=$produtos item=p}
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="{$base_url_img}{$p.prod_imagem}" alt="">
                <div class="card-body">
                    <h4 class="card-title">{strtoupper($p.prod_nome)}</h4>
                    {if {$p.prod_promocao} eq 's' and {$p.prod_data_inicial_promocao} le date('Y-m-d') and {$p.prod_data_final_promocao} ge date('Y-m-d')}
                        <p class="text-danger card-text" id="preco">
                            <del>R$ {$p.prod_preco}</del>
                        </p>
                        <p class="text-success card-text">R$ {$p.prod_preco_promocao}</p>
                    {else}
                        <p class="card-text text-success">R$ {$p.prod_preco}</p>
                    {/if}
                </div>
                <div class="card-footer">
                    <div class="align-content-center text-center">
                        <a href="{$produto}{$p.prod_id}" class="botao-produtos btn btn-success"><i class="fa fa-eye"></i></a>
                        <a href="#" class="botao-produtos btn btn-primary"><i class="fa fa-pencil-alt"></i></a>
                        <a href="{$deletar}{$p.prod_id}" class="botao-produtos btn btn-danger"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
            </div>
        </div>
    {/foreach}
    {*/produtos*}
</div>
{*paginação*}
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        {*pagina anterior*}
        <li class="page-item">
            <a class="page-link" href="{$pagina_anterior}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        {*/pagina anterior*}
        {*paginas*}
        {for $foo=0 to $numero_de_paginas}
            <li class="page-item"><a class="page-link" href="{$url_paginacao}{$foo + 1}">{$foo + 1}</a></li>
        {/for}
        {*/paginas*}
        {*pagina posterior*}
        <li class="page-item">
            <a class="page-link" href="{$pagina_posterior}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
        {*/pagina posterior*}
    </ul>
</nav>
{*/paginação*}

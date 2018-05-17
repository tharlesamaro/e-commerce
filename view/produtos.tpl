<div class="row text-center">
    {foreach from=$produtos item=p}
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                <div class="card-body">
                    <h4 class="card-title">{$p.prod_nome}</h4>
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
                    <a href="{$produto}{$p.prod_id}" class="btn btn-primary"><i class="fa fa-eye"></i> Ver
                        produto!</a>
                </div>
            </div>
        </div>
    {/foreach}
</div>

<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="{$pagina_anterior}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        {for $foo=0 to $numero_de_paginas}
            <li class="page-item"><a class="page-link" href="{$url_paginacao}{$foo + 1}">{$foo + 1}</a></li>
        {/for}
        <li class="page-item">
            <a class="page-link" href="{$pagina_posterior}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>
</nav>


<div class="row">
    <div class="col-lg-3">
        <h1 class="my-4">Calcular Frete</h1>
        <div class="list-group">

        </div>
    </div>
    <div class="col-lg-9">
        {foreach from=$produto item=p}
            <div class="card-produto-info card mt-4">
                <img class="card-img-top img-fluid" src="{$base_url_img}{$p.prod_imagem}" alt="">
                <div class="card-body">
                    <h3 class="card-title">{strtoupper($p.prod_nome)}</h3>
                    {if {$p.prod_promocao} eq 's' and {$p.prod_data_inicial_promocao} le date('Y-m-d') and {$p.prod_data_final_promocao} ge date('Y-m-d')}
                        <h4 class="text-danger card-text" id="preco">
                            <del>R$ {$p.prod_preco}</del>
                        </h4>
                        <h4 class="text-success card-text">R$ {$p.prod_preco_promocao}</h4>
                    {else}
                        <h4 class="card-text text-success">R$ {$p.prod_preco}</h4>
                    {/if}
                    {*<h4>R$ {$p.prod_preco}</h4>*}
                    <p class="card-text">{$p.prod_descricao}</p>
                    {*<span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</span>*}
                    {*5.0 estrelas*}
                </div>
            </div>
            <!-- /.card -->
            <div class="card-produto-info card card-outline-secondary my-4">
                <div class="card-header">
                    Outras Informações:
                </div>
                <div class="card-produto-info card-body">
                    <p>Altura: {$p.prod_altura} cm</p>
                    <hr>
                    <p>Largura: {$p.prod_largura} cm</p>
                    <hr>
                    <p>Comprimento: {$p.prod_comprimento} cm</p>
                    <hr>
                    <p>Peso: {$p.prod_peso} Kg</p>
                    <hr>
                </div>
            </div>
            <a href="#" class="produto-info-footer btn btn-success"><i class="fa fa-shopping-cart"></i> Comprar</a>
            <br>
        {/foreach}
    </div>
</div>

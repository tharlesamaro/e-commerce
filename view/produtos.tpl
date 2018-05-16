<div class="row text-center">
    {foreach from=$PRO item=P}
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
                <h4 class="card-title">{$P.prod_nome}</h4>
                <p class="card-text">R$ {$P.prod_preco}</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Ver produto!</a>
            </div>
        </div>
    </div>
    {/foreach}
</div>
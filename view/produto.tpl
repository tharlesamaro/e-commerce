<div class="row">

    <div class="col-lg-3">
        <h1 class="my-4">Calcular Frete</h1>
        <div class="list-group">

        </div>
    </div>
    <!-- /.col-lg-3 -->

    <div class="col-lg-9">

        {foreach from=$produto item=p}
            <div class="card-produto-info card mt-4">
                <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
                <div class="card-body">
                    <h3 class="card-title">{$p.prod_nome}</h3>
                    <h4>R$ {$p.prod_preco}</h4>
                    <p class="card-text">{$p.prod_descricao}</p>
                    <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                    4.0 stars
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

            <a href="#" class="produto-info-footer btn btn-success">Comprar</a>
            <br>
            <!-- /.card -->
        {/foreach}
    </div>
    <!-- /.col-lg-9 -->

</div>
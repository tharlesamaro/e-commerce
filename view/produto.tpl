<div class="row">

    <div class="col-lg-3">
        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
            <a href="#" class="list-group-item active">Category 1</a>
            <a href="#" class="list-group-item">Category 2</a>
            <a href="#" class="list-group-item">Category 3</a>
        </div>
    </div>
    <!-- /.col-lg-3 -->

    {foreach from=$PRODUTO item=P}
    <div class="col-lg-9">

        <div class="card mt-4">
            <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
            <div class="card-body">
                <h3 class="card-title">{$P.prod_nome}</h3>
                <h4>$24.99</h4>
                <p class="card-text">{$P.prod_descricao}</p>
                <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                4.0 stars
            </div>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col-lg-9 -->
    {/foreach}

</div>
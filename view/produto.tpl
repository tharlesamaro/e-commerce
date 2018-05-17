<div class="row">
    {foreach from=$produto item=p}
        <div class="col-lg-3">
            <div class="row">
                <img class="img-caminhao-frete img-fluid" src="{$base_url_img_root}caminhao.svg" width="15%" height=""
                     alt="">
                <h3 class="my-4">Calcular Frete</h3>
            </div>
            <div class="list-group">
                <form action="{$base_url}/produto/{$p.pro_id}" method="post">
                    <div class="form-group">
                        <input class="form-control" type="text" id="cep_destino" name="cep_destino" maxlength="8" minlength="8"
                               placeholder="Ex: 60000000"
                               required>
                    </div>
                    <!-- campos do tipo hidden -->
                    <input type="text" id="prod_peso" name="prod_peso" value="{$p.prod_peso}" hidden>
                    <input type="text" id="prod_preco" name="prod_preco" value="{$p.prod_preco}" hidden>
                    <input type="text" id="prod_altura" name="prod_altura" value="{$p.prod_altura}" hidden>
                    <input type="text" id="prod_comprimento" name="prod_comprimento" value="{$p.prod_comprimento}"
                           hidden>
                    <input type="text" id="prod_largura" name="prod_largura" value="{$p.prod_largura}" hidden>
                    <input type="text" id="prod_id" name="prod_id" value="{$p.prod_id}" hidden>
                    <!-- botão calcular -->
                    <button class="btn btn-success form-control" type="submit"><i class="fa fa-calculator"></i> Calcular
                    </button>
                </form>
            </div>
        </div>
        <div class="col-lg-9">
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
        </div>
    {/foreach}
</div>

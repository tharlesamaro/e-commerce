<div class="row">
    {foreach from=$produto item=p}
        <div class="col-lg-3">
            {*frete sessão*}
            <div class="row">
                <img class="img-caminhao-frete img-fluid" src="{$base_url_img_root}caminhao.svg" width="15%" height=""
                     alt="">
                <h3 class="my-4">Calcular Frete</h3>
            </div>
            <div class="list-group">
                <form action="{$base_url}/produto/{$p.pro_id}" method="post">
                    <div class="form-group">
                        <label for="cep_destino">CEP:</label>
                        <input class="form-control" type="text" id="cep_destino" name="cep_destino" maxlength="8"
                               minlength="8"
                               placeholder="Ex: 60000000"
                               required>
                    </div>
                    {*selecionar tipo de frete*}
                    <div class="form-group">
                        <label for="tipo_de_frete">Tipo de frete:</label>
                        <select class="form-control" name="tipo_de_frete" id="tipo_de_frete" required>
                            <option selected value="40010">SEDEX</option>
                            <option value="41106">PAC</option>
                        </select>
                    </div>
                    {*/selecionar tipo de frete*}
                    {*campos hidden*}
                    <input type="text" id="prod_peso" name="prod_peso" value="{$p.prod_peso}" hidden>
                    {if {$p.prod_promocao} eq 's' and {$p.prod_data_inicial_promocao} le date('Y-m-d') and {$p.prod_data_final_promocao} ge date('Y-m-d')}
                        <input type="text" id="prod_preco" name="prod_preco" value="{$p.prod_preco_promocao}" hidden>
                    {else}
                        <input type="text" id="prod_preco" name="prod_preco" value="{$p.prod_preco}" hidden>
                    {/if}
                    <input type="text" id="prod_altura" name="prod_altura" value="{$p.prod_altura}" hidden>
                    <input type="text" id="prod_comprimento" name="prod_comprimento" value="{$p.prod_comprimento}"
                           hidden>
                    <input type="text" id="prod_largura" name="prod_largura" value="{$p.prod_largura}" hidden>
                    <input type="text" id="prod_id" name="prod_id" value="{$p.prod_id}" hidden>
                    {*/campos hidden*}
                    <button class="btn btn-success form-control" type="submit"><i class="fa fa-calculator"></i> Calcular
                    </button>
                </form>
            </div>
            {*resultado calculo frete*}
            {if {$mostrar_calculo_frete} eq 1}
                <div class="frete-resultado">
                    <ul class="list-group">
                        {if {$frete_codigo_erro} eq 0}
                            <li class="list-inline-item">Valor do frete: R$ {$frete_valor}</li>
                            <li class="list-inline-item">Entrega: {$frete_prazo} dias úteis</li>
                            <li class="list-inline-item">Frete escolhido: {$tipo_de_frete}</li>
                        {else}
                            <li class="list-group-item-danger">Erro: {$frete_mensagem_erro}</li>
                        {/if}
                    </ul>
                </div>
            {/if}
            {*/resultado calculo frete*}
            {*/frete sessão*}
        </div>
        {*Produto detalhado*}
        <div class="col-lg-9">
            {*card detalhe produto*}
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
                    <p class="card-text">{$p.prod_descricao}</p>
                </div>
            </div>
            {*/card detalhe produto*}
            {*card outras informações*}
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
            {*/card outras informações*}
            {if {$mostrar_calculo_frete} eq 1 and {$frete_codigo_erro} eq 0}
                {*card informações da compra*}
                <div class="card-produto-info card card-outline-secondary my-4">
                    <div class="card-header">
                        Informações da compra:
                    </div>
                    <div class="card-produto-info card-body">
                        <p>Valor total da compra: R$ {$valor_total_produto}</p>
                        <hr>
                        <p>Prazo para entrega: {$frete_prazo} dias úteis</p>
                        <hr>
                    </div>
                </div>
                {*/card informações da compra*}
            {/if}
            {*botão de comprar que ativa o modal*}
            <button type="button" class="produto-info-footer btn btn-success" data-toggle="modal"
                    data-target="#modalCompra"><i
                        class="fa fa-shopping-cart"></i> Comprar
            </button>
            {*/botão de comprar que ativa o modal*}
            <br>
            {if {$mostrar_calculo_frete} eq 1}
                {*modal finalizar compra*}
                <div class="modal fade" id="modalCompra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Conclusão de compra</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{$base_url}/compra" method="post">
                                    <div class="form-group">
                                        <label for="nome">Nome:</label>
                                        <input class="form-control" type="text" id="nome" name="nome" minlength="5"
                                               maxlength="100" placeholder="Nome completo" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-mail:</label>
                                        <input class="form-control" type="email" id="email" name="email"
                                               placeholder="Ex: email@dominio.com" required>
                                    </div>
                                    {* campos hidden *}
                                    <input type="hidden" id="prod_nome" name="prod_nome" value="{$p.prod_nome}" hidden>
                                    <input type="hidden" id="valor_total" name="valor_total"
                                           value="{$valor_total_produto}" hidden>
                                    <input type="hidden" id="cep_destino" name="cep_destino" value="{$cep_destino}"
                                           hidden>
                                    {* /campos hidden *}
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                                                    class="fa fa-window-close"></i> Cancelar
                                        </button>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-credit-card"></i>
                                            Comprar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {*/modal finalizar compra*}
            {else}
                {*modal alerta calculo de frete*}
                <div class="modal" id="modalCompra" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"><i class="fa fa-exclamation-circle"></i> IMPORTANTE</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Por favor! Calcule o frete antes de finalizar sua compra!</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
                {*/modal alerta calculo de frete*}
            {/if}
        </div>
        {*/Produto detalhado*}
    {/foreach}
</div>

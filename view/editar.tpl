<div>
    <h3 class="text-center">Edição de produto</h3>
    <hr>
    <p>Atenção! Campos com <b class="text-danger">*</b> são obrigatórios.</p>
    <hr>
    {*formulário cadastro de produto*}
    {foreach from=$produto item=p}
        <form action="{$base_url}/cadastro" method="post" enctype="multipart/form-data" id="formCadastroProdutos">
            {*nome do produto*}
            <div class="form-group">
                <label for="nome">Nome: <b class="text-danger">*</b></label>
                <input type="text" class="form-control" value="{$p.prod_nome}" id="nome" name="nome"
                       placeholder="Nome do produto"
                       minlength="5"
                       maxlength="50" autofocus required>
            </div>
            {*/nome do produto*}

            {*preco*}
            <div class="form-group">
                <label for="preco">Preço: <b class="text-danger">*</b></label>
                <input type="text" class="form-control" value="{$p.prod_preco}" id="preco" name="preco" minlength="4"
                       maxlength="8"
                       placeholder="0.00" required>
            </div>
            {*/preco*}

            {*descricao*}
            <div class="form-group">
                <label for="descricao">Descrição: <b class="text-danger">*</b></label>
                <textarea type="text" class="form-control" id="descricao" name="descricao"
                          placeholder="Descrição do produto" maxlength="255" minlength="10"
                          required>{$p.prod_descricao}</textarea>
            </div>
            {*/descricao*}

            {*selecionar promoção*}
            <div class="form-group">
                <label for="promocao">Promoção:</label>
                <select class="form-control" id="promocao" name="promocao">
                    {if $p.prod_promocao eq 'n'}
                        <option value="n" selected>Não</option>
                        <option value="s">Sim</option>
                    {/if}
                    {if $p.prod_promocao eq 's'}
                        <option value="n">Não</option>
                        <option value="s" selected>Sim</option>
                    {/if}
                </select>
            </div>
            {*/selecionar promoção*}

            {*valor promocional*}
            <div class="form-group">
                <label for="preco_promocao">Preço promocional:</label>
                {if $p.prod_promocao eq 'n'}
                    <input type="text" class="form-control" value="{$p.prod_preco_promocao}" id="preco_promocao"
                           name="preco_promocao" minlength="4"
                           maxlength="8" placeholder="0.00" disabled>
                {/if}
                {if $p.prod_promocao eq 's'}
                    <input type="text" class="form-control" value="{$p.prod_preco_promocao}" id="preco_promocao"
                           name="preco_promocao" minlength="4"
                           maxlength="8" placeholder="0.00">
                {/if}
            </div>
            {*/valor promocional*}

            {*data incial promoção*}
            <div class="form-group">
                <label for="data_inicio_promocao">Início da promoção:</label>
                {if $p.prod_promocao eq 'n'}
                    <input type="text" class="form-control"
                           value="{implode("/", array_reverse(explode("-", {$p.prod_data_inicial_promocao})))}"
                           id="data_inicio_promocao" name="data_inicio_promocao" disabled>
                {/if}
                {if $p.prod_promocao eq 's'}
                    <input type="text" class="form-control"
                           value="{implode("/", array_reverse(explode("-", {$p.prod_data_inicial_promocao})))}"
                           id="data_inicio_promocao" name="data_inicio_promocao">
                {/if}
            </div>
            {*/data incial promoção*}

            {*data final promoção*}
            <div class="form-group">
                <label for="data_final_promocao">Fim da promoção:</label>
                {if $p.prod_promocao eq 'n'}
                    <input type="text" class="form-control"
                           value="{implode("/", array_reverse(explode("-", {$p.prod_data_final_promocao})))}"
                           id="data_final_promocao" name="data_final_promocao" disabled>
                {/if}
                {if $p.prod_promocao eq 's'}
                    <input type="text" class="form-control"
                           value="{implode("/", array_reverse(explode("-", {$p.prod_data_final_promocao})))}"
                           id="data_final_promocao" name="data_final_promocao">
                {/if}
            </div>
            {*/data final promoção*}

            {*peso*}
            <div class="form-group">
                <label for="peso">Peso: <b class="text-danger">*</b></label>
                <input type="text" class="form-control" value="{$p.prod_peso}" id="peso" name="peso" minlength="3"
                       maxlength="3"
                       placeholder="00.0" required>
            </div>
            {*/peso*}

            {*altura*}
            <div class="form-group">
                <label for="altura">Altura: <b class="text-danger">*</b></label>
                <input type="text" class="form-control" value="{$p.prod_altura}" id="altura" name="altura" minlength="3"
                       maxlength="3"
                       placeholder="00.0" required>
            </div>
            {*/altura*}

            {*comprimento*}
            <div class=" form-group">
                <label for="comprimento">Comprimento: <b class="text-danger">*</b></label>
                <input type="text" class="form-control" value="{$p.prod_comprimento}" id="comprimento"
                       name="comprimento" minlength="3" maxlength="3"
                       placeholder="00.0" required>
            </div>
            {*/comprimento*}

            {*largura*}
            <div class="form-group">
                <label for="largura">Largura: <b class="text-danger">*</b></label>
                <input type="largura" class="form-control" value="{$p.prod_largura}" id="largura" name="largura"
                       minlength="3" maxlength="3"
                       placeholder="00.0" required>
            </div>
            {*/largura*}

            {*imagem*}
            <div class="form-group">
                <label for="imagem">Imagem (940x400):</label>
                <input type="file" class="form-control-file" id="form_edit_imagem" name="form_edit_imagem"
                       aria-describedby="fileHelp">
            </div>
            {*hidden*}
            <input type="text" value="{$p.prod_imagem}" id="form_edit_imagem_hidden" name="form_edit_imagem_hidden"
                   hidden>
            {*/imagem*}
            <hr>
            {*botões salvar e cancelar*}
            <div class="form-row">
                <div class="form-group">
                    <button type="submit" class="botao-cadastro btn btn-success">Salvar</button>
                </div>
                <div class="form-group">
                    <button type="reset" class="botao-cadastro btn btn-danger form-control">Cancelar</button>
                </div>
            </div>
            {*/botões salvar e cancelar*}
        </form>
        {*/formulário cadastro de produto*}
    {/foreach}
</div>

<div>
    {*session informações do cadastro*}
    {if $smarty.session.sucesso}
        <div><p class="alert-success text-center">Produto cadastrado com sucesso!</p></div>
    {/if}
    {if $smarty.session.erro}
        <div><p class="alert-danger text-center">Erro ao cadastrar o produto!.</p>
    {/if}
    {*/session informações do cadastro*}

    <p>Atenção! Campos com <b class="text-danger">*</b> são obrigatórios.</p>
    <hr>
    <form action="{$base_url}/cadastro/" method="post" enctype="multipart/form-data">
        {*nome do produto*}
        <div class="form-group">
            <label for="nome">Nome: <b class="text-danger">*</b></label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do produto"
                   minlength="5"
                   maxlength="50" autofocus required>
        </div>
        {*/nome do produto*}

        {*preco*}
        <div class="form-group">
            <label for="preco">Preço: <b class="text-danger">*</b></label>
            <input type="text" class="form-control" id="preco" name="preco" placeholder="" required>
        </div>
        {*/preco*}

        {*descricao*}
        <div class="form-group">
            <label for="descricao">Descrição: <b class="text-danger">*</b></label>
            <textarea type="text" class="form-control" id="descricao" name="descricao"
                      placeholder="Descrição do produto" maxlength="255" minlength="5" required></textarea>
        </div>
        {*/descricao*}

        {*selecionar promoção*}
        <div class="form-group">
            <label for="promocao">Promoção:</label>
            <select class="form-control" id="promocao" name="promocao">
                <option value="n" selected>Não</option>
                <option value="s">Sim</option>
            </select>
        </div>
        {*/selecionar promoção*}

        {*valor promocional*}
        <div class="form-group">
            <label for="preco_promocao">Valor promocional:</label>
            <input type="text" class="form-control" id="preco_promocao" name="preco_promocao">
        </div>
        {*/valor promocional*}

        {*data incial promoção*}
        <div class="form-group">
            <label for="data_inicio_promocao">Início da promoção:</label>
            <input type="text" class="form-control" id="data_inicio_promocao" name="data_inicio promocao">
        </div>
        {*/data incial promoção*}

        {*data final promoção*}
        <div class="form-group">
            <label for="data_final_promocao">Fim da promoção:</label>
            <input type="text" class="form-control" id="data_final_promocao" name="data_final_promocao">
        </div>
        {*/data final promoção*}

        {*peso*}
        <div class="form-group">
            <label for="peso">Peso: <b class="text-danger">*</b></label>
            <input type="text" class="form-control" id="peso" name="peso" placeholder="" required>
        </div>
        {*/peso*}

        {*altura*}
        <div class="form-group">
            <label for="altura">Altura</label>
            <input type="text" class="form-control" id="altura" name="altura" placeholder="">
        </div>
        {*/altura*}

        {*comprimento*}
        <div class="form-group">
            <label for="comprimento">Comprimento:</label>
            <input type="text" class="form-control" id="comprimento" name="comprimento" placeholder="">
        </div>
        {*/comprimento*}

        {*largura*}
        <div class="form-group">
            <label for="largura">Largura:</label>
            <input type="largura" class="form-control" id="largura" name="largura" placeholder="">
        </div>
        {*/largura*}

        {*imagem*}
        <div class="form-group">
            <label for="imagem">Imagem (recomendado 940x400): <b class="text-danger">*</b></label>
            <input type="file" class="form-control-file" id="imagem" name="imagem" aria-describedby="fileHelp" required>
        </div>
        {*/imagem*}
        <hr>
        {*botões*}
        <div class="form-row">
            <div class="form-group">
                <button type="submit" class="botao-cadastro btn btn-success">Cadastrar</button>
            </div>
            <div class="form-group">
                <button type="reset" class="botao-cadastro btn btn-danger form-control">Limpar</button>
            </div>
        </div>
        {*/botões*}
    </form>
</div>

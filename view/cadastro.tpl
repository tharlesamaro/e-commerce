<div>
    {*session alertas*}
    {if $smarty.session.cadastro_sucesso}
        <p class="alert-success text-center">Produto cadastrado com sucesso!</p>
    {/if}
    {if $smarty.session.cadastro_erro}
        <p class="alert-danger text-center">Erro ao cadastrar o produto!.</p>
    {/if}
    {*/session alertas*}

    <h3 class="text-center">Cadastro de produto</h3>
    <hr>
    <p>Atenção! Campos com <b class="text-danger">*</b> são obrigatórios.</p>
    <hr>
    {*formulário cadastro de produto*}
    <form action="{$base_url}/cadastro" method="post" enctype="multipart/form-data" id="formCadastroProdutos">
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
            <input type="text" class="form-control" id="preco" name="preco" minlength="4" maxlength="8"
                   placeholder="0.00" required>
        </div>
        {*/preco*}

        {*descricao*}
        <div class="form-group">
            <label for="descricao">Descrição: <b class="text-danger">*</b></label>
            <textarea type="text" class="form-control" id="descricao" name="descricao"
                      placeholder="Descrição do produto" maxlength="255" minlength="10" required></textarea>
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
            <label for="preco_promocao">Preço promocional:</label>
            <input type="text" class="form-control" id="preco_promocao" name="preco_promocao" minlength="4"
                   maxlength="8" placeholder="0.00" disabled>
        </div>
        {*/valor promocional*}

        {*data incial promoção*}
        <div class="form-group">
            <label for="data_inicio_promocao">Início da promoção:</label>
            <input type="text" class="form-control" id="data_inicio_promocao" name="data_inicio_promocao" disabled>
        </div>
        {*/data incial promoção*}

        {*data final promoção*}
        <div class="form-group">
            <label for="data_final_promocao">Fim da promoção:</label>
            <input type="text" class="form-control" id="data_final_promocao" name="data_final_promocao" disabled>
        </div>
        {*/data final promoção*}

        {*peso*}
        <div class="form-group">
            <label for="peso">Peso: <b class="text-danger">*</b></label>
            <input type="text" class="form-control" id="peso" name="peso" minlength="3" maxlength="3"
                   placeholder="00.000" required>
        </div>
        {*/peso*}

        {*altura*}
        <div class="form-group">
            <label for="altura">Altura: <b class="text-danger">*</b></label>
            <input type="text" class="form-control" id="altura" name="altura" minlength="3" maxlength="3"
                   placeholder="00.00" required>
        </div>
        {*/altura*}

        {*comprimento*}
        <div class=" form-group">
            <label for="comprimento">Comprimento: <b class="text-danger">*</b></label>
            <input type="text" class="form-control" id="comprimento" name="comprimento" minlength="3" maxlength="3"
                   placeholder="00.00" required>
        </div>
        {*/comprimento*}

        {*largura*}
        <div class="form-group">
            <label for="largura">Largura: <b class="text-danger">*</b></label>
            <input type="largura" class="form-control" id="largura" name="largura" minlength="3" maxlength="3"
                   placeholder="00.00" required>
        </div>
        {*/largura*}

        {*imagem*}
        <div class="form-group">
            <label for="imagem">Imagem (940x400): <b class="text-danger">*</b></label>
            <input type="file" class="form-control-file" id="imagem" name="imagem" aria-describedby="fileHelp"
                   required>
        </div>
        {*/imagem*}
        <hr>
        {*botões cadastrar e limpar*}
        <div class="form-row">
            <div class="form-group">
                <button type="submit" class="botao-cadastro btn btn-success">Cadastrar</button>
            </div>
            <div class="form-group">
                <button type="reset" class="botao-cadastro btn btn-danger form-control">Limpar</button>
            </div>
        </div>
        {*/botões cadastrar e limpar*}
    </form>
    {*/formulário cadastro de produto*}
</div>

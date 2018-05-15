<form class="" action="#" method="post">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" autofocus tabindex="1"
               placeholder="Nome do produto" required>
    </div>
    <div class="row">
        <div class="form-group col-3">
            <label for="preco">Preço:</label>
            <input type="number" class="form-control" id="preco" name="preco" tabindex="2" placeholder="Preço em R$"
                   required>
        </div>
        <div class="form-group col-3">
            <label for="altura">Altura:</label>
            <input type="number" class="form-control" id="altura" name="altura" placeholder="Altura em cm" tabindex="3">
        </div>
        <div class="form-group col-3">
            <label for="peso">Peso:</label>
            <input type="number" class="form-control" id="peso" name="peso" placeholder="Peso em Kg" tabindex="4">
        </div>
        <div class="form-group col-3">
            <label for="peso">Peso:</label>
            <input type="number" class="form-control" id="peso" name="peso" placeholder="Peso em Kg" tabindex="4">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-3">
            <label for="promocao">Promoção:</label>
            <select class="form-control custom-select" id="promocao" name="promocao" tabindex="5">
                <option class="form-control" value="1" selected>Não</option>
                <option class="form-control" value="2">Sim</option>
            </select>
        </div>
        <div class="form-group col-3">
            <label for="preco_promocional">Preço Promocional</label>
            <input type="number" class="form-control" id="preco_promocional" name="preco_promocional" tabindex="2"
                   placeholder="Preço em R$" required>
        </div>
        <div class="form-group col-3">
            <label for="data_inicial">Data inicial</label>
            <input type="date" class="form-control" id="data_inicial" name="data_inicial" tabindex="2" required>
        </div>
        <div class="form-group col-3">
            <label for="data_final">Data final</label>
            <input type="date" class="form-control" id="data_final" name="data_final" tabindex="2" required>
        </div>
    </div>
    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea class="form-control" id="descricao" name="descricao" tabindex="6" maxlength="255"
                  placeholder="Dsecrição do produto" required></textarea>
    </div>
    <div class="row">
        <div class="form-group col-4">
            <button class="btn btn-primary form-control" type="submit" tabindex="">Cadastrar</button>
        </div>
        <div class="form-group col-4">
            <button class="btn btn-danger form-control" type="button" tabindex="">Limpar</button>
        </div>
        <div class="form-group col-4">
            <a class="btn btn-danger form-control" href="{$BASE_URL}" tabindex="">Cancelar</a>
        </div>
    </div>
</form>

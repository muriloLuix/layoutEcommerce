@extends('layoutadicionar-produto')

@section('content')
<div class="general">
    <h1>
        <a href="{{ url()->previous() }}" class="btn-voltar">Voltar</a> >
        {{ ucwords(str_replace('-', ' ', request()->path())) }}.
    </h1>
</div>

<div class="generalDiv">
    <div class="generalContent">
        <div class="form">
            <form action="" method="POST}}">
                <div class="input-group">
                    <label for="prod_nome" class="input-label">Nome do produto:</label>
                    <input type="text" name="prod_nome" id="prod_nome" required class="input-field">
                </div>

                <div class="input-group">
                    <label for="prod_preco" class="input-label">Preço do produto:</label>
                    <input type="text" name="prod_preco" id="prod_preco" required class="input-field">
                </div>

                <div class="input-group">
                    <label for="prod_preco" class="input-label">Quant. do prod.:</label>
                    <input type="number" name="prod_preco" id="prod_preco" class="input-field">
                </div>

                <div class="input-group">
                    <label for="prod_categoria_id" class="input-label">Catego. do prod.:</label>
                    <select name="prod_categoria_id" id="prod_categoria_id"></select>
                </div>

                <div class="input-group">
                    <label for="prod_status" class="input-label">Status do prod.:</label>
                    <select name="prod_status" id="prod_status"></select>
                </div>

                <label for="prod_descricao" class="input-label labelDesc">Descrição do produto:
                    <div class="hr"></div>
                    <textarea name="prod_descricao" id="prod_descricao" class="text-field"></textarea>
                </label>

                <button type="submit"><i class="bi bi-pencil"></i>CONCLUIR INFORMAÇÕES DE PRODUTO</button>
            </form>
        </div>
        <div class="imagemProduto">
            <h1>Seu produto</h1>
            <div class="btnAddFoto">
                <a href=""><i class="bi bi-pencil"></i>ADICIONAR FOTO</a>
            </div>
        </div>
    </div>
    <div class="buttonsGeneral">
        <a href="" class="voltar">VOLTAR</a>
        <a href="" class="pararProduto">Parar de criar produto</a>
        <a href="" class="finalizarProduto">FINALIZAR PRODUTO</a>
    </div>
</div>



@endsection
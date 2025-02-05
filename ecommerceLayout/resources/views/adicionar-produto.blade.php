@extends('layoutadicionar-produto')

@section('content')
</div>
<div class="general">
    <h1>
        <a href="{{ url()->previous() }}" class="btn-voltar">Voltar</a> >
        {{ ucwords(str_replace('-', ' ', request()->path())) }}.
    </h1>
</div>

<div class="generalDiv">
    <div class="generalContent">
        <div class="form">
            <form action="" method="POST">
                @csrf
                <div class="input-group">
                    <label for="prod_nome" class="input-label">Nome do produto:</label>
                    <input type="text" name="prod_nome" id="prod_nome" required class="input-field">
                </div>

                <div class="input-group">
                    <label for="prod_preco" class="input-label">Preço do produto:</label>
                    <input type="text" name="prod_preco" id="prod_preco" required class="input-field">
                </div>

                <div class="input-group">
                    <label for="prod_quantidade" class="input-label">Quant. do prod.:</label>
                    <input type="number" name="prod_quantidade" id="prod_quantidade" class="input-field" required>
                </div>

                <div class="input-group">
                    <label for="prod_categoria_id" class="input-label">Catego. do prod.:</label>
                    <select name="prod_categoria_id" id="prod_categoria_id" required>
                        <option value=""></option>
                        @foreach ($categoriaList as $categoria)
                            <option value="{{ $categoria->cat_id }}">{{ $categoria->cat_nome }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group">
                    <label for="prod_status" class="input-label">Status do prod.:</label>
                    <select name="prod_status" id="prod_status" class="form-control" required>
                        <option value=""></option>
                        @foreach($statusList as $status)
                            <option value="{{ $status->sta_id }}">{{ $status->sta_nome }}</option>
                        @endforeach
                    </select>
                </div>

                <label for="prod_descricao" class="input-label labelDesc">Descrição do produto:
                    <div class="hr"></div>
                    <textarea name="prod_descricao" id="prod_descricao" class="text-field" required></textarea>
                </label>

                <button type="button" id="btnConcluir" class="btnConcluir">
                    <i class="bi bi-pencil"></i> CONCLUIR INFORMAÇÕES DE PRODUTO
                </button>
        </div>
        <div class="imagemProduto">
            <h1>Seu produto</h1>
            <div class="btnAddFoto">
                <a href=""><i class="bi bi-pencil"></i> ADICIONAR FOTO</a>
            </div>
        </div>
    </div>

    <div class="buttonsGeneral">
        <a href="" class="voltar">VOLTAR</a>
        <a href="" class="pararProduto">Parar de criar produto</a>
        <button type="submit" class="finalizarProduto">FINALIZAR PRODUTO</button>
    </div>
</form>




@endsection

@extends('layoutadicionar-categoria')

@section('content')
<div class="general">
    <h1>
        <a href="{{ url()->previous() }}" class="btn-voltar">Voltar</a> >
        {{ ucwords(str_replace('-', ' ', request()->path())) }}.
    </h1>
</div>

<div class="generalCategory">
    <form action="{{ route('categoria.adicionar') }}" method="post">
        @csrf
        <div class="floating-label">
            <input type="text" name="cat_nome" id="cat_nome" placeholder=" " value="{{ old('cat_nome') }}">
            <label for="cat_nome">Nome da categoria</label>
        </div>

        <div class="floating-label">
            <input type="text" name="cat_descricao" id="cat_descricao" placeholder=" " value="{{ old('cat_descricao') }}">
            <label for="cat_descricao">Descrição da categoria</label>
        </div>

        <div class="btnEditar">
            <button type="submit">ADICIONAR</button>
        </div>
    </form>
</div>

<!-- Modal de Sucesso -->
@if(session('success'))
    <div id="successModal" class="modal" style="display:block;">
        <div class="modal-content">
            <img src="{{ asset('img/status/echoAzulMsg.svg') }}" alt="Echo Azul">
            <h2>{!! session('success') !!}</h2>
            <button onclick="closeModal()" class="sucessButton">Voltar a tela de Criação de categoria</button>
        </div>
    </div>
@endif

<!-- Modal de Erro -->
@if(session('error') || $errors->has('cat_nome'))
    <div id="errorModal" class="modal" style="display:block;">
        <div class="modal-content">
            <h1 class="h1Erro">ERRO!</h1>
            <img src="{{ asset('img/status/echoVermelhoMsg.svg') }}" alt="Echo Azul">
            <h2>
                {!! session('error') !!}
                @if($errors->has('cat_nome'))
                    <p>{{ $errors->first('cat_nome') }}</p>
                @endif
            </h2>
            <button onclick="closeErrorModal()" class="errorButton">Fechar</button>
        </div>
    </div>
@endif


@endsection

@section('scripts')
<script>
    function closeModal() {
        document.getElementById('successModal').style.display = 'none';
    }

    function closeErrorModal() {
        document.getElementById('errorModal').style.display = 'none';
    }

    window.onclick = function (event) {
        if (event.target === document.getElementById('successModal')) {
            closeModal();
        }
        if (event.target === document.getElementById('errorModal')) {
            closeErrorModal();
        }
    }
</script>


@endsection
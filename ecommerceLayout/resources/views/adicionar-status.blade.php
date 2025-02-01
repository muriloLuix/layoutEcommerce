@extends('layoutadicionar-status')

@section('content')
<div class="general">
    <h1>
        <a href="{{ url()->previous() }}" class="btn-voltar">Voltar</a> >
        {{ ucwords(str_replace('-', ' ', request()->path())) }}.
    </h1>
</div>

<div class="generalStatus">
    <form action="{{ route('status.adicionar') }}" method="post">
        @csrf
        <div class="floating-label">
            <input type="text" name="sta_nome" id="sta_nome" placeholder=" " value="{{ old('sta_nome') }}">
            <label for="sta_nome">Nome do status</label>
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
            <button onclick="closeModal()" class="sucessButton">Voltar a tela de Criação de status</button>
        </div>
    </div>
@endif

<!-- Modal de Erro -->
@if(session('error') || $errors->has('sta_nome'))
    <div id="errorModal" class="modal" style="display:block;">
        <div class="modal-content">
            <h1 class="h1Erro">ERRO!</h1>
            <img src="{{ asset('img/status/echoVermelhoMsg.svg') }}" alt="Echo Azul">
            <h2>
                {!! session('error') !!}
                @if($errors->has('sta_nome'))
                    <p>{{ $errors->first('sta_nome') }}</p> <!-- Aqui será exibida a mensagem de erro personalizada -->
                @endif
            </h2>
            <button onclick="closeErrorModal()" class="errorButton">Fechar</button>
        </div>
    </div>
@endif


@endsection

{{-- Script para fechar modais --}}
@section('scripts')
<script>
    // Função para fechar o modal de sucesso
    function closeModal() {
        document.getElementById('successModal').style.display = 'none';
    }

    // Função para fechar o modal de erro
    function closeErrorModal() {
        document.getElementById('errorModal').style.display = 'none';
    }

    // Função que vai fechar o modal de sucesso ao clicar fora
    window.onclick = function(event) {
        if (event.target === document.getElementById('successModal')) {
            closeModal();
        }
        if (event.target === document.getElementById('errorModal')) {
            closeErrorModal();
        }
    }
</script>
@endsection

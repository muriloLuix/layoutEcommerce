@extends('layoutconfig')

@section('content')

<div class="general">
    <h1>
        <a href="{{ url()->previous() }}" class="btn-voltar">Voltar</a> >
        {{ ucwords(str_replace('-', ' ', request()->path())) }}.
    </h1>
</div>

<div class="itensConfig">
    <nav>
        <ul>
            <a href="">
                <li>Historico</li>
            </a>
            <a href="/editar-produto">
                <li>Editar produto</li>
            </a>
            <a href="/adicionar-produto">
                <li>Adicionar produto</li>
            </a>
            <a href="/adicionar-status">
                <li>Adicionar status</li>
            </a>
            <a href="">
                <li>Sair da conta</li>
            </a>
        </ul>
    </nav>
</div>

@endsection
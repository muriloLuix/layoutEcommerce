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
                <li>Histórico</li>
            </a>

            {{-- Dropdown do Produto --}}
            <li class="dropdown">
                <span class="dropdown-toggle">Produto</span>
                <ul class="dropdown-menu">
                    <a href="/adicionar-produto">
                        <li>Adicionar produto</li>
                    </a>
                    <a href="/editar-produto">
                        <li>Editar produto</li>
                    </a>
                </ul>
            </li>

            <!-- Dropdown do Status -->
            <li class="dropdown">
                <span class="dropdown-toggle">Status</span>
                <ul class="dropdown-menu">
                    <a href="/adicionar-status">
                        <li>Adicionar status</li>
                    </a>
                    <a href="/editar-status">
                        <li>Editar status</li>
                    </a>
                </ul>
            </li>

            <li class="dropdown">
                <span class="dropdown-toggle">
                    Categoria
                </span>
                <ul class="dropdown-menu">
                    <a href="/adicionar-categoria">
                        <li>Adicionar categoria</li>
                    </a>
                    <a href="/editar-categoria">
                        <li>Editar categoria</li>
                    </a>
                </ul>
            </li>

            <a href="">
                <li>Sair da conta</li>
            </a>
        </ul>
    </nav>
</div>

@endsection
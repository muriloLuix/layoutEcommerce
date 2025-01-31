@extends('layouthub-de-alteracoes')

{{-- Main --}}
@section('content')
<div class="general">
    <h1>
        <a href="{{ url()->previous() }}" class="btn-voltar">Home</a> > 
        {{ ucwords(str_replace('-', ' ', request()->path())) }}.
    </h1>    <div class="generalMain">
        <a href="/editar-produto"><i class="bi bi-pencil-square"></i> Editar Produtos.</a>
        <a href="/adicionar-produto"><i class="bi bi-pencil"></i>Adicionar Produtos.</a>
    </div>
</div>

@endsection
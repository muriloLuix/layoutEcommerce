@extends('layoutadicionar-status')

@section('content')
<div class="general">
    <h1>
        <a href="{{ url()->previous() }}" class="btn-voltar">Voltar</a> >
        {{ ucwords(str_replace('-', ' ', request()->path())) }}.
    </h1>
</div>


@endsection
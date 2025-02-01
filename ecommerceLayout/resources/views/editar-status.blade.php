@extends('layouteditar-status')

@section('content')
<div class="general">
    <h1>
        <a href="{{ url()->previous() }}" class="btn-voltar">Voltar</a> >
        {{ ucwords(str_replace('-', ' ', request()->path())) }}.
    </h1>
</div>

<div class="generalStatus">
    <div class="cardStatus">
        <div class="nameStatus">
            <span>Nome do Status</span>
        </div>
        <div class="btnEditar">
            <button>EDITAR</button>
        </div>
    </div>
</div>



@endsection
@extends('layoutadmin')

@section('content')
<div class="container">
    <div class="leftSide">
        <div class="logo-container">
            <img src="{{asset('img/favicon/IconeLaranja.svg')}}" alt="Logo" class="logo">
            <h1>DEV MODE.</h1>
        </div>
        <div class="login-box">
            <h2>Seja bem vindo</h2>
            <p>Seja bem vindo! Por favor faça o login na sua conta.</p>
            <form action="{{ route('login.submit') }}" method="POST">
                @csrf <!-- Token CSRF obrigatório -->
                <div class="input-group">
                    <input type="text" name="usu_email" id="usu_email" required>
                    <label for="usu_email">E-mail</label>
                </div>
                <div class="input-group password-group">
                    <input type="password" name="usu_senha" id="usu_senha" required>
                    <label for="usu_senha">Senha</label>
                    <span class="toggle-password">
                        <i class="fas fa-eye"></i>
                    </span>
                </div>
                <div class="options">
                    <label class="custom-checkbox">
                        <input type="checkbox" name="remember">
                        <span class="checkmark"></span>
                        Lembrar o acesso
                    </label>

                    <a href="#" class="forgot-password">Esqueceu sua senha?</a>
                </div>
                <button type="submit" class="btn-login">Entrar</button>
                <button type="button" class="btn btn-primary btnBootstrap" data-bs-toggle="modal"
                    data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ainda não tem acesso? Crie sua
                    conta!</button>
            </form>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de administrador</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('register.submit') }}" method="POST">
                                @csrf <!-- Necessário para proteção CSRF -->
                                <div class="input-group">
                                    <input type="text" name="usu_nome" id="nome" required>
                                    <label for="nome">Nome</label>
                                </div>
                                <div class="input-group">
                                    <input type="email" name="usu_email" id="email" required>
                                    <label for="email">E-mail</label>
                                </div>
                                <div class="input-group password-group">
                                    <input type="password" name="usu_senha" id="senha" required>
                                    <label for="senha">Senha</label>
                                    <span class="toggle-password">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </div>
                                <div class="input-group">
                                    <label for="telefone">Telefone</label>
                                    <input type="tel" name="usu_telefone" id="telefone" required>
                                </div>
                                
                                <button type="submit" class="btn btn-primary btnEnviar">Enviar</button>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

            {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif --}}


        </div>
    </div>
    <div class="character">
        <img src="{{asset('img/character/echoAdmin.svg')}}" alt="Character">
    </div>
</div>
@endsection
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
                <form action="login.php" method="POST">
                    <div class="input-group">
                        <input type="text" name="email" id="email" required>
                        <label for="email">E-mail</label>
                    </div>
                    <div class="input-group password-group">
                        <input type="password" name="password" id="password" required>
                        <label for="password">Senha</label>
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
                </form>
            </div>
        </div>
        <div class="character">
            <img src="{{asset('img/character/echoAdmin.svg')}}" alt="Character">
        </div>
    </div>
@endsection
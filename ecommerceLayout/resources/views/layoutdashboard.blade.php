<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Script --}}
    <script src="{{asset('js/carouselComents.js')}}" defer></script>
    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- Font Awesome --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('img/favicon/IconeLaranja.svg') }}" type="image/x-icon">
    {{-- Css --}}
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <title>@yield('title', '| Dashboard')</title>
</head>

<body>
    <header>
        <nav>
            <div class="leftSide">
                <!-- Logo -->
                <div class="logo">
                    <img src="{{ asset('img/logoEcho/logoEchoLaranja.svg') }}" alt="Logo Echo">
                </div>

                <!-- Navegação -->
                <div class="navigation">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#sobre-nos">Sobre nós</a></li>
                        <li><a href="#loja">Loja</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </div>
            </div>

            <!-- Botão -->
            <div class="button">
                <div class="buttonsHeader">
                    <a href="" class="btn-geral">Configuração</a>
                    <a href="" class="btn-geral">Adicionar/Apagar Produtos</a>
                    <a href="" class="btn-geral">Nome do Usuário</a>
                </div>
            </div>

            <!-- Menu Hambúrguer -->
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>
    <main>
        {{-- O conteúdo da página será injetado aqui --}}
        @yield('content')
    </main>
    <footer>
        <footer>
            <img src="{{asset('img/footer/logoEchoFooter.svg')}}" alt="Imagem de fundo do footer" class="footer-bg">
            <div class="generalFooter">
                <div class="footer-content">
                    <div class="contact-info">
                        <h3>Contato</h3>
                        <p>(XX) XXXX-XXXX</p>
                        <p>(XX) XXXXX-XXXX</p>
                        <h3>E-mail</h3>
                        <p>xxxxx@xxxxx.xxx</p>
                        <h3>Horário de Funcionamento</h3>
                        <p>XX:XX às XX:XX - Em dia de semana</p>
                        <p>XX:XX às XX:XX - Em final de semana</p>
                    </div>
                    <div class="secondColumn">
                        <div class="address">
                            <h3>Endereço</h3>
                            <p>XXX-XXXXX X XXXX</p>
                        </div>
                        <div class="social-media">
                            <h3>Redes Sociais</h3>
                            <p>@go.echo_</p>
                            <div class="icons">
                                <i class="fa-brands fa-instagram"></i>
                                <i class="fa-brands fa-facebook"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="maps">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3601.8181167018647!2d-49.293530723856236!3d-25.477748134784218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce35d8fd77e69%3A0x7e40791e81a1e36c!2sShopping%20Palladium!5e0!3m2!1spt-BR!2sbr!4v1737295943544!5m2!1spt-BR!2sbr"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </footer>
        <section class="copyright">
            <div class="copyrightDiv">
                <div class="imgEcho">
                    <a href="https://www.goecho.com.br" target="_blank"> <img
                            src="{{asset('img/footer/miniLogoEchoFooter.svg')}}" alt="">
                    </a>
                </div>
                <div class="textoCopyright">
                    <span>Designed by Echo© 2024</span>
                </div>
            </div>
        </section>
    </footer>
</body>

</html>
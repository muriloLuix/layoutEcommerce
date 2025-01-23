@extends('layout')

@section('content')
<div class="generalContent">
    <div class="textTop">
        <h1>Construa o seu <span class="futuro">FUTURO.</span></h1>
    </div>
    <div class="generalRightSide">
        <div class="duvidas">
            <div class="imagemEchoDuvidas">
                <img src="{{ asset('img/logoEcho/logoEchoDuvida.svg') }}" alt="Logo Echo">
            </div>
            <div class="textDuvida">
                <span>Entre em contato ou tire alguma dúvida</span>
                <a href="" class="greenDuvida">Fale Conosco<svg width="20" height="19" viewBox="0 0 12 11" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.65381 7.79134L8.23714 3.20801" stroke="#41A131" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M3.65381 3.20801H8.23714V7.79134" stroke="#41A131" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="feedback">
            <div class="imagemEchoFeedback">
                <img src="{{ asset(path: 'img/logoEcho/logoEchoFeedback.svg') }}" alt="Logo Echo">
            </div>
            <div class="textFeedback">
                <a href="">Dar um feedback para a Echo</a>
                <img src="{{ asset(path: 'img/estrelasFeedback/estrelasFeedback.svg') }}" alt="">
            </div>
        </div>
    </div>
</div>

<section class="banner">
    <div class="bannerContent">
        <img src="{{ asset(path: 'img/produtosBanner/produtoBanner.svg') }}" alt="Banner Ecommerce">
    </div>
</section>

<section class="feedbackCarousel">
    <h1>Feedback. <span class="feedbackLight">Sua Opinião é Importante para Nós.</span></h1>

    <div class="feedbackClientes">
        <div class="personagem">
            <img src="img/personagemFeedback/echoFeedback.svg" alt="Echo">
        </div>
        <div class="comentariosWrapper">
            <div class="comentariosClientes">
                <span>"Excelente atendimento e produtos de alta qualidade. Recomendo!"</span>
            </div>
            <div class="comentariosClientes">
                <span>"Os produtos chegaram no prazo e em perfeito estado. Voltarei a comprar!"</span>
            </div>
            <div class="comentariosClientes">
                <span>"Ótimo serviço! Atendimento muito atencioso e rápido."</span>
            </div>
        </div>
        <button class="carousel-btn prev"><i class="fas fa-chevron-left"></i></button>
        <button class="carousel-btn next"><i class="fas fa-chevron-right"></i></button>
    </div>
    <div class="dots"></div>

    <div class="dots"></div>
</section>

<section class="sobre">
    <h1>Sobre Nós. <span class="sobreNosLight">Transformando Ideias em Realidade com Paixão e Inovação.</span></h1>
    <div class="textoSobre">
        <span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet arcu nec nunc tincidunt
            sollicitudin. Praesent euismod, felis vel cursus gravida, est nisi condimentum felis, non scelerisque arcu
            eros eu quam. Cras vestibulum vulputate erat, in malesuada mi auctor id. Fusce sit amet nisi vel sapien
            faucibus elementum. Integer vehicula massa vel dictum ultrices. Mauris nec sapien nec ligula tempor
            vehicula. In aliquet, libero ac malesuada fermentum, felis erat pretium arcu, nec iaculis justo urna quis
            urna. Phasellus nec tortor et justo pulvinar posuere sit amet sit amet justo. Pellentesque eu sagittis
            sapien. Duis vel dolor sit amet neque tincidunt gravida ac id turpis. Etiam quis nulla erat. Nullam sit amet
            turpis non purus pellentesque feugiat non ac metus. Quisque vulputate justo in sem euismod, nec sagittis
            nulla tempor. Integer consequat eros id purus elementum posuere.</span>
    </div>
</section>

<section class="loja">
    <h1>Loja. <span class="lojaLight">O melhor da XXXXXX em suas mãos.</span></h1>

    <div class="cardsLoja">
        <div class="cardProduto">
            <div class="imagemProduto">
                <p>Seu produto</p>
            </div>
            <div class="descricaoProduto">
                <h2>Seu produto</h2>
                <p>R$ XX,XX</p>
                <button class="btnVerProduto">Ver produto</button>
            </div>
        </div>
    </div>


</section>

@endsection
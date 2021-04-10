<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
    <title>Robin Food - O delivery que devolve sua grana </title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="theme-color" content="Blue"/>
    <meta charset="UTF-8"/>
    <meta name="description" content="O Robin Food é um app de delivery que devolve sua grana. 
    É só escolher o restaurante e fazer o seu pedido. 
    Você recebe de volta parte da grana que você pagou, 
    que é convertida em crédito pra você usar nos próximos pedidos"/>
    <meta name="author" itemprop="MMPX"/>

    <!-- Adicionar Favicon em todas as versões -->
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="icon" href="#" type="image/x-icon">

    <!-- Tags facebook -->
    <meta property="og:locale" content="pt_BR"/>
    <meta property="og:url" content="virundum"/>
    <meta property="og:title"
          content="Vortexs sunt byssuss de placidus visus. Potus diligenter ducunt ad alter navis. ">
    <meta property="og:site_name" content="Candidatus ">
    <meta property="og:description"
          content="Ubi est albus pars? Cum mortem favere, omnes habitioes promissio grandis, dexter elevatuses. ">
    <meta property="og:type" content="website"/>

    <!-- Links & Scripts -->
    <link rel="stylesheet" href="https://use.typekit.net/nbc5nyh.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    @toastr_css


    <link id="favicon" rel="shortcut icon" href="{{asset('images/Logo-icon.png')}}" sizes="16x16" type="image/png">
    <link id="favicon" rel="shortcut icon" href="{{asset('images/Logo-icon.png')}}" sizes="32x32" type="image/png">
    <link id="favicon" rel="shortcut icon" href="{{asset('images/Logo-icon.png')}}" sizes="48x48" type="image/png">

    <link rel="apple-touch-icon" sizes="48x48" href="{{asset('images/Logo-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/Logo-icon.png')}}">
    <link rel="apple-touch-icon" sizes="96x96" href="{{asset('images/Logo-icon.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('images/Logo-icon.png')}}">
    <link rel="apple-touch-icon" sizes="192x192" href="{{asset('images/Logo-icon.png')}}">
    <link rel="apple-touch-icon" sizes="256x256" href="{{asset('images/Logo-icon.png')}}">
    <link rel="apple-touch-icon" sizes="384x384" href="{{asset('images/Logo-icon.png')}}">
    <link rel="apple-touch-icon" sizes="512x512" href="{{asset('images/Logo-icon.png')}}">

    <!-- Lightbox -->
    <link rel="stylesheet" type="text/css" href="{{asset('lightbox/css/lightbox.css')}}"/>
</head>
<body>
<nav>
    <div class="main-wrapper">
        <div class="flex-container">
            <a class="logotipo" href="{{route('Site.home')}}">
                <img src="{{asset('images/Logo-RF.png')}}">
            </a>
            <ul class="navigation__itens" id="menu">
                <li>
                    <a href="{{route('Site.home')}}">Página principal
                        <span class="border-effect"></span>
                    </a>
                </li>
                <li>
                    <a href="{{route('Site.partners')}}">Parceiros
                        <span class="border-effect"></span>
                    </a>
                </li>
                <li>
                    <a href="{{route('Site.blog')}}">Blog
                        <span class="border-effect"></span>
                    </a>
                </li>
                <li>
                    <a href="{{route('Site.about')}}">Sobre
                        <span class="border-effect"></span>
                    </a>
                </li>
                <li>
                    <a href="{{route('Site.contact')}}">Contato
                        <span class="border-effect"></span>
                    </a>
                </li>
            </ul>
            <!-- Hamburger menu -->
            <div id="toggle">
                <div class="span" id="one"></div>
                <div class="span" id="two"></div>
                <div class="span" id="three"></div>
            </div>
        </div>
    </div>
</nav>

<!-- Hamburger menu list -->
<div id="resize">
    <ul id="menu">
        <li><a class="title-medium" href="{{route('Site.home')}}">Página principal</a></li>
        <li><a class="title-medium" href="{{route('Site.partners')}}">Parceiros</a></li>
        <li><a class="title-medium" href="{{route('Site.blog')}}">Blog</a></li>
        <li><a class="title-medium" href="{{route('Site.about')}}">Sobre</a></li>
        <li><a class="title-medium" href="{{route('Site.contact')}}">Contato</a></li>
    </ul>
</div>

@yield('content')

<footer class="main_footer">
    <div class="dots_pattern"></div>
    <div class="main-wrapper flex-container">
        <div class="quality-badge">
            <p>Cur omnia mori? </p>
            <p>Ubi est barbatus zelus? </p>
        </div>
        <ul>
            <li class="footer__links">
                <h4 class="title-small">Redes Sociais</h4>
                <a href="{{route('Site.blog')}}">Blog</a>
                <a href=" https://www.facebook.com/beerandcodeoficial/" target="_blank">Facebook</a>
                <a href="https://www.youtube.com/c/BeerAndCode?sub_confirmation=1" target="_blank">YouTube</a>
            </li>
            <li class="footer__links">
                <h4 class="title-small">Empresa</h4>
                <a href="{{route('Site.partners')}}">Nossos parceiros</a>
                <a href="{{route('Site.about')}}">Sobre nós</a>
                <a href="{{route('Site.contact')}}">Entre em contato</a>
            </li>
            <li class="footer__links">
                <h4 class="title-small">Contatos</h4>
                <a title="Clique no número do telefone para ligar" href="tel:16999999999">Telefone</a>
                <a title="Clique no email para enviar email automatico" href="mailto:contato@beerandcode.com
                .br">Email</a>
            </li>
        </ul>
    </div>
</footer>
<section class="sub__footer">
    <div class="main-wrapper flex-container">
        <a href="#"><img src="{{asset('images/Lock-icon.svg')}}">CMS</a>
        <p><img src="{{asset('images/Logo-RF.png')}}" width="240" height="40"/> </p>
        <a href="" target="_blank">Deisgn by <strong>Leonardo Müller</strong></a>
    </div>
</section>

</body>


<!-- Scripts -->
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<script type="text/javascript" src="{{asset('lightbox/js/lightbox.js')}}"></script>

@toastr_js
@toastr_render

<script>
    $("#toggle").click(function () {
        $(this).toggleClass("on")
        $("#resize").toggleClass("active")
    })
</script>
</html>


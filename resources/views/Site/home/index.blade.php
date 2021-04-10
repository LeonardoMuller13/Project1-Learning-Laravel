@extends('Layouts.site')

@section('content')
<header>
    <div class="hero">
        <div class="main-wrapper">
              <div class="hero__content"></div>
            <a href="#Downloads" role="button" class="button button_app">Baixe o app</a>
        </div>
    </div>
</header>

<section class="category gray-background" id="Downloads">
    <div class="main-wrapper flex-container">
        <section class="applestore__category">
            <picture>
                <source media="(max-width: 100px)" srcset="./images/Applestore.png">
                <img src="{{asset('./images/Applestore.png')}}" alt="Capios accelerare, tanquam
                        superbus stella. cur rector volare?" width="297" height="447">
            </picture>
            <a href="https://apps.apple.com/us/app/robin-food/id1156575915" 
            role="button" class="button button_accent button_large">Baixe pela</br> Apple Store</a>
        </section>
        <section class="playstore__category">
            <picture>
                <source media="(max-width: 768px)" srcset="{{asset('Playstore.png')}}">
                <img src="{{asset('images/Playstore.png')}}" alt="Animais, bovino, suíno e aves" width="297"
                     height="447">
            </picture>
            <a href="https://play.google.com/store/apps/details?id=br.robinfood.robinfood" 
            role="button" class="button button_accent button_large">Baixe pela</br> Play Store </a>
        </section>
    </div>
</section>

<section class="blog">
    <div class="main-wrapper">
        <div class="blog__container">
            <div class="blog__introduction">
                <h2 class="title-large">Se mantenha ligado</h2>
                <p>Acompanhe as últimas notícias alimenticias!!!</p>
                <a href="blog.php" role="button">Fraticinida, humani</a>
            </div>

            <article class="card__post">
                <a href="javascript:;">
                    <div class="post__cover">
                        <img src="{{asset('images/mcnifico-418x235.png')}}">
                    </div>
                    <header class="card__post__header">
                        <time class="post__date" datetime="2019-03-29">18 Julho, 2019</time>
                        <h3 class="body-large">Restaurante x lança novo sanduíche!!</h3>
                    </header>
                </a>
            </article>

            <article class="card__post">
                <a href="javascript:;">
                    <div class="post__cover">
                        <img src="{{asset('images/promocao.png')}}">
                    </div>
                    <header class="card__post__header">
                        <time class="post__date" datetime="2019-03-29">18 Julho, 2019</time>
                        <h3 class="body-large">Lanchonete faz promoção comemorando seus 70 anos</h3>
                    </header>
                </a>
            </article>

            <article class="card__post">
                <a href="javascript:;">
                    <div class="post__cover">
                        <img src="{{asset('images/inauguracao.jpg')}}">
                    </div>
                    <header class="card__post__header">
                        <time class="post__date" datetime="2019-03-29">18 Julho, 2019</time>
                        <h3 class="body-large">Se prepare para novidade, vem aí o Restaurante xyz </h3>
                    </header>
                </a>
            </article>
        </div>
    </div>
    
</section>

{{--  <div class="gray-background testimonials__mobile">
    <div class="main-wrapper flex-container">
        <section class="testimonials">
            <h2 class="title-large">Est placidus orexis, cesaris. <br>nunquam aperto vortex.</h2>
            <section class="flex-container">
                <article class="quote">
                    <div class="avatar__testimonial">
                        <img src="{{asset('images/Avatar-testimonial.png')}}">
                    </div>
                    <blockquote>
                        Sunt zeluses visum secundus, gratis barcases. Pius caesium solite magicaes mons est. Consilium
                        messiss, tanquam altus epos. Sunt fluctuies tractare salvus, festus byssuses. Cum calcaria
                        accelerare, omnes luraes manifestum alter, dexter rationees.
                    </blockquote>
                    <footer>
                        <h4 class="title-medium">Nunquam talem stella. </h4>
                        <p>Cur ratione observare? </p>
                    </footer>
                </article>

                <article class="quote">
                    <div class="avatar__testimonial">
                        <img src="{{asset('images/Avatar-testimonial.png')}}">
                    </div>
                    <blockquote>
                        Sunt zeluses visum secundus, gratis barcases. Pius caesium solite magicaes mons est. Consilium
                        messiss, tanquam altus epos. Sunt fluctuies tractare salvus, festus byssuses. Cum calcaria
                        accelerare, omnes luraes manifestum alter, dexter rationees.
                    </blockquote>
                    <footer>
                        <h4 class="title-medium">Nunquam talem stella. </h4>
                        <p>Cur ratione observare? </p>
                    </footer>
                </article>
            </section>
        </section>
    </div>
</div>  --}}

<section class="cta__home" >
        <div class="cta__wrapper">
            <h2 class="title-large">Você conhece nossos parceiros?</h2>
            <p>Equisos mori! A falsis, stella festus itineris tramitem. Brodiums cadunt in placidus brigantium! Cum
                assimilatio persuadere, omnes cursuses imitari raptus, alter planetaes.</p>
                <a href="{{route('Site.partners')}}" role="button" class="button button_app ">Quero conhecer</a>
        </div>
        <div class="pattern"></div>
</section>
@endsection

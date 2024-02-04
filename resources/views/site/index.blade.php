@extends('merge.site.index')
@section('title', 'Grupo pdc')

@section('content')
    
   <!--FEATURED-->
<article class="home_featured">
    <div class="home_featured_content container content">
        <header class="home_featured_header">
            <h1>Consultas ou Exames pra Fazer? Comece a cuidar da sua saúde!</h1>
            <p>Cadastre-se, marque suas consultas ou Exames, escolhendo a instituição do PDC mais próxima de ti e com o profissional de saúde de sua escolha!</p>
            <p><a href="{{route('login.form')}}">
                <span 
                     class="home_featured_btn gradient gradient-green gradient-hover radius transition icon-check-square-o text-light">Criar minha conta e começar a cuidar da minha saúde
                    </span></a></p>
            <p class="features">Rápido | Simples </p>
        </header>
    </div>

    <div class="home_featured_app">
        <img src="site/images/ficha-medica.png" alt="SaudeControl" title="SaudeControl"/>
    </div>
</article>

<!--FEATURES-->
<div class="home_features">
    <section class="container content">
        <header class="home_features_header">
            <h2>O que você pode fazer com o PDC Gestão de Saúde?</h2>
            <p>São 3 passos simples para você começar a cuidar melhor de si. É tudo muito fácil, veja:</p>
        </header>

        <div class="home_features_content">
            <article class="radius">
                <header>
                    <img alt="Contas a receber" title="Contas a receber" src="site/images/home_receive.jpg"/>
                    <h3>Marcar Consultas/Exames</h3>
                    <p>Cadastre  suas marcações de consultas ou exames use as automações e comece a cuidar de sua saúde. É rápido!</p>
                </header>
            </article>

            <article class="radius">
                <header>
                    <img alt="Contas a pagar" title="Contas a pagar" src="site/images/realizar-exame.png"/>
                    <h3>Realizar Suas Consultas/Exames</h3>
                    <p>Depois de fazer as suas marcações vai poder concretizar suas consultas e exames na instituição escolhida. É simples!</p>
                </header>
            </article>

            <article class="radius">
                <header>
                    <img alt="Controle e relatórios" title="Controle e relatórios" src="site/images/home_control.jpg"/>
                    <h3>Controle e Relatórios</h3>
                    <p>Controle seus diagnósticos e acompanhe os relatórios do RCU. É gratuito!</p>
                </header>
            </article>
        </div>
    </section>
</div>

<!--OPTIN-->
<article class="home_featured">
    <div class="home_featured_content container content" >
        <header class="home_featured_content_flex">
            <h2>Cadastre-se no PDC  e comece a controlar o seu estado de saúde</h2>
            <p>Com ele você marca suas consultas e exames, controle seus diagnoósticos e relatórios no conforto de sua casa.</p>
            <p>Pronto para começar a controlar sua saúde?</p>
        </header>
    </div>
</article>

<!--OPT OUT-->
   
@endsection
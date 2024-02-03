@extends('merge.site.index')
@section('title', 'Login')

@section('content')
    

<article class="auth">
    <div class="auth_content container content">
        <header class="auth_header">
            <h1>Fazer Login</h1>
            <p>Ainda não tem conta? <a title="Cadastre-se" href="{{route('sis.form.utente')}}">Cadastre-se!</a></p>
        </header>

        <form class="auth_form" action="{{route('sis.login')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="email">
                <div><span class="icon-envelope">Email:</span></div>
                <input type="" name="email" placeholder="Informe seu e-mail:"/>
            </label>

            <label for="password">
                <div class="unlock-alt">
                    <span class="icon-unlock-alt">Senha:</span>
                   
                </div>
                <input type="password" name="password" placeholder="Informe sua senha:"/>
            </label>

            <label class="check">
                <input type="checkbox" name="save"/>
                <span>Lembrar dados?</span>
            </label>

            <button type="submit" class="auth_form_btn transition gradient gradient-green gradient-hover">Entrar</button>
        </form>
    </div>
</article>
@endsection
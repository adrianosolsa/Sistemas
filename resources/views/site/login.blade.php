@extends('site.layouts.basicoLogin')

@section('conteudoLogin')
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logoTeccol.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action={{ route('site.login') }} method="post">
                                @csrf
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="au-input au-input--full" type="text" name="usuario" placeholder="Usuario">
                                </div>
                                <div class="form-group">
                                    <label>Senha</label>
                                    <input class="au-input au-input--full" type="password" name="senha" placeholder="Senha">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Relembra senha
                                    </label>
                                    <label>
                                        <a href="#">Redefinir Senha?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Acessar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
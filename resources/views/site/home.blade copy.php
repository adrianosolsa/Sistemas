@extends('site.layouts.basico')

@section('conteudo')

<body class="">

    <div class="page-container">
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">@yield('content')</div>
            </div>
        </div>
        <div class="col-sm-12">@include('partials.footer')</div>
    </div>

@endsection
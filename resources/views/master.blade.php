<title>Laravel Layout</title><font></font>
<font></font>
    <!-- Fontfaces CSS--><font></font>
    <link href="{{{ URL::asset('css/font-face.css') }}}" rel="stylesheet" media="all"><font></font>
    <link href="{{{ URL::asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}}" rel="stylesheet" media="all"><font></font>
    <link href="{{{ URL::asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}}" rel="stylesheet" media="all"><font></font>
    <link href="{{{ URL::asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}}" rel="stylesheet" media="all"><font></font>
<font></font>
    <!-- Bootstrap CSS--><font></font>
    <link href="{{{ URL::asset('vendor/bootstrap-4.1/bootstrap.min.css')}}}" rel="stylesheet" media="all"><font></font>
<font></font>
    <link href="{{{ URL::asset('vendor/animsition/animsition.min.css')}}}" rel="stylesheet" media="all"><font></font>
<font></font>
    <!-- Main CSS--><font></font>
    <link href="{{{ URL::asset('css/theme.css')}}}" rel="stylesheet" media="all"><font></font>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script><font></font>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script><font></font>
    <font></font>
    <font></font>
</head><font></font>
<font></font>
<body class=""><font></font>
<div class="page-wrapper">@include('partials.header') @include('partials.sidebar')<font></font>
<div class="page-container"><font></font>
<div class="main-content"><font></font>
<div class="section__content section__content--p30"><font></font>
<div class="container-fluid">@yield('content')</div><font></font>
</div><font></font>
</div><font></font>
<div class="col-sm-12">@include('partials.footer')</div><font></font>
</div><font></font>
</div>
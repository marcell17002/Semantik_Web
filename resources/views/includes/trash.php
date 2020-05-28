@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
<!Doctype HTML>
<html>
    <head>
        <title>
            @yield('title')
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layout_header_footer.css') }}" />
    </head>
    <body>
        <div class="topnav" id="topnav">
            <img class="logo" src="{{asset('image/logo.png')}}">
            <div class="topnav-right">
                <a href="/certification" href="javascript:void(0)">Certification</a>
                <a href="#about" href="javascript:void(0)">Network</a>
                <a href="#about" href="javascript:void(0)">Article</a>
                <a href="#about" href="javascript:void(0)">Notifiation</a>
                <a href="#about" href="javascript:void(0)">Login</a>
            </div>
            </div>
        </div>
        <script>
            window.onscroll = function() {myFunction()};

            var navbar = document.getElementById("topnav");
            var sticky = navbar.offsetTop;

            function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
            }
        </script>
        
        @yield('container')

        <div class="footer">
            <h5 style="text-align: center;color: white;"> Copyright ©2020 | Invention Udayana 2020 | Bucinangor </h5>
            <h6 style="text-align: center;color: white;"> Made with love from Jatinangor,West Java, Indonesia</h6>
        </div>
   </body>
</html>
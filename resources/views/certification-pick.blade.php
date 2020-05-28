<!Doctype HTML>
<html>
    <head>
        <title>
            Welcome! - Certiv
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/certification-pick.css') }}" />
    </head>
    <body>
        @include('includes.header')
        
       <div class="container">
            <div class="row">
                <div class="col-4">
                    <image src={{asset('image/cisco.png')}} style="widht: 16%; height: 16%; margin-top:30%;margin-left:5%;">
                    <h3 style="text-align:center;margin-top:20%;padding-right:5%"> {{$details->company}} </h3>
                    <h5 style="text-align:center;padding-right:5%;"> {{$details->desc}} </h5>
                    <br>
                    <form action="" method="POST">
                    @csrf
                        <input type="hidden" value="{{$details->url}}" name="url">
                        <button class="btn btn-primary" type="submit" style="color : white; border-radius: 10px; background-color: #1b294a;width:90%;margin-left:5%;"> Apply </button>
                    </form>
                    <a href="https://api.whatsapp.com/send?phone=62895401011469&text=Halo saya ingin mendaftar dalam sertifikasi ini!." class="float" target="_blank"><button class="btn btn-success" type="button" style="color : white; border-radius: 10px; background-color: #00ff44;width:90%;margin-left:5%; margin-top:5%;"> Contact via Whats App </button></a>
                </div>
                <div class="col-8">
                    <h1 style="color : #1b294a; padding-top:10%;"> Judul </h1>
                    <br>
                    <p style="text-align:justify;">{{$details->desc_detail}}</p>
                </div>
            </div>
        </div>
        <!-- Floating action -->
        <a href="https://api.whatsapp.com/send?phone=62895401011469&text=Halo saya ingin mendaftar dalam sertifikasi ini!." class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>
       @include('includes/footer')
    </body>
</html>
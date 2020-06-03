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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/certification.css') }}" />
    </head>
    <body>
        
        @include('includes.header')
        
        <!-- test -->
        <div class="active-cyan-4 mb-4" style="margin-left: 20%;margin-right:20%;">
            <form action="/network/search" method="get">
                <div class="container" style="margin-left:2%;margin-top:2%">
                    <input class="form-control" type="text" name="judul" placeholder="Search..." value="{{ old('judul') }}" aria-label="Search">
                </div>
            </form>
        </div>  
        <div class="network" style="margin-left:4%;margin-right:4%">
        <h3 style="text-align:left;margin-top:5%;margin-bottom:2%">See what "" has been done </h3>
        <div class="row">
            @foreach ($networks as $network)
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src={{asset('image/passed.png')}} alt="Avatar" style="width:100%;height:90%;">
                            </div>
                            <div class="col-sm">
                                <h3 class="card-title">{{$network->judul}}</h3>
                                <p class="card-text" style="font-size:16px">on {{$network->tanggal}}</p>
                                <a class="btn btn-secondary" href="/certification/{{$network->link}}" style="color : white; border-radius: 0px;width:100%; "> See more </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach  
        </div>
        </div>

        @include('includes/footer')
    </body>
</html>
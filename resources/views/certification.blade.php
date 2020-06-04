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
        
        <div class="active-cyan-4 mb-4" style="margin-left: 20%;margin-right:20%;">
            <form action="/certification/search" method="get">
            <div class="containers" style="margin-left:2%;margin-top:2%">
                <div class="row">   
                    <div class="col-md-8">
                        <input class="form-control" type="text" name="judul" placeholder="Search..." value="{{ old('judul') }}" >
                    </div>
                    <div class="col-md-2">
                        <select class="form-control" name="option" id="exampleFormControlSelect1">
                            <option class="form-control" value="Nama">Nama Event</option>
                            <option class="form-control" value="Kategori">Kategori</option>
                            <option  class="form-control"value="Periode">Periode</option>
                            <option class="form-control" value="Harga">Harga</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </div>
                </div>
            </div>
            </form>
        </div>

             
            @if($certifications->numRows() == 0)
                <h2 style="text-align:center">Data Tidak Ditemukan</h2>
            @endif
        <div class="container">
  
            @foreach ($certifications as $certification)
                <div class="card">
                    <img src={{asset('image/cisco.png')}} alt="Avatar" style="padding: 10px 10px;">
                    <div class="container1">
                        <h4 style="text-align:center;border-top:2px;"><b>{{$certification->judul}}</b></h4> 
                        <p style="text-align:center;">{{$certification->tanggal}}</p> 
                        <a class="btn btn-primary" href="/certification/{{$certification->link}}" style="color : white; border-radius: 0px;width:100%; "> Apply </a>
                    </div>
                </div>
            @endforeach    
            </div>
        </div>

            @isset($relates)
        <h3 style="text-align:center;margin-top:5%">Related Topics </h3>
       
        <div class ="container">
            @foreach ($relates as $relateTo)
            <div class="card">
                    <img src={{asset('image/cisco.png')}} alt="Avatar" style="padding: 10px 10px;">
                    <div class="container1">
                        <h4 style="text-align:center;border-top:2px;"><b>{{$relateTo->namebaru}}</b></h4> 
                        <p style="text-align:center;">{{$relateTo->datebaru}}</p> 
                        <a class="btn btn-primary" href="/certification/{{$relateTo->link}}" style="color : white; border-radius: 0px;width:100%; "> Apply </a>
                    </div>
                </div>
            @endforeach    
            </div>
        </div>
            @endisset

        @include('includes/footer')
    </body>
</html>